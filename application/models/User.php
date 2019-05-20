<?php
    defined('BASEPATH') or die('No Direct Access');

    class User extends CI_Model{

        private $ID;
        private $FirstName;
        private $LastName;
        private $userName;
        private $address;
        private $phone;
        private $cart;
        private $Balance;
        private $order;

        public function addUser($username,$password,$fname,$lname,$address,$phone){
            $passwordHash = password_hash($password,PASSWORD_BCRYPT);
            $data = array(
                'username' => $username,
                'password' => $passwordHash,
                'first_name' => $fname,
                'last_name' => $lname,
                'address' => $address,
                'phone' => $phone,
                'Balance' => 999999
            );
            $this->db->trans_begin();
            $this->db->insert('user',$data);
            $this->db->trans_complete();
            if($this->db->trans_status() == FALSE){
                $this->db->trans_rollback();
                return FALSE;
            }
            $this->db->select('user_id');
            $this->db->where('username='.$username);
            $this->db->from('user');
            $userid = $this->db->get_compiled_select();
            $dataCart = array(
                'user_id' => $userid,
                'status' => 0
            );
            $this->db->insert('Cart',$dataCart);
            return TRUE;
        }

        public function CheckLogin($username,$password){
            $this->db->where('username',$username);
            $query = $this->db->get('user');
            $userData = $query->result_array();
            if(!empty($userData)) {
                if(password_verify($password,$userData[0]['password'])){
                    $this->ID = $userData[0]['user_id'];
                    $this->FirstName = $userData[0]['first_name'];
                    $this->LastName = $userData[0]['last_name'];
                    $this->username = $userData[0]['username'];
                    $this->address = $userData[0]['address'];
                    $this->phone = $userData[0]['phone'];
                    $this->Balance = $userData[0]['Balance'];
                    $this->GetCart();
                    if($this->cart === NULL){
                        $dataCart = array(
                            'user_id' => $this->ID,
                            'status' => 0
                        );
                        $this->db->insert('Cart',$dataCart);
                        $this->GetCart();
                    }
                    return TRUE;
                }
            }
            return FALSE;
        }

        public function CheckUsernameUnique($username) {
            $this->db->where('username', $username);
            $count = $this->db->count_all_results('user');
            if($count == 0) {
                return TRUE;
            }
            return FALSE;
        }

        public function GetCart(){
            //$this->db->cache_on();
            $this->db->select('idCart');
            $this->db->where('user_id', $this->ID);
            $this->db->where('status',0);
            $this->db->order_by('idCart','DESC');
            $this->db->limit(1);
            $query = $this->db->get('Cart');
            $userData = $query->result_array();
            $this->cart = $userData[0]['idCart'];
            return $this->cart;
        }

        public function GetOrder(){
            //$this->db->cache_on();
            $this->db->join('Cart','Cart.idCart = orders.idCart');
            $this->db->join('product','product.product_id = orders.product_id');
            $this->db->where('user_id',$this->ID);
            $this->db->where('Cart.idCart',$this->cart);
            $this->db->where('status',0);
            $query = $this->db->get('orders');
            $this->order = $query->result_array();
            return $this->order;
        }

        public function CountOrder(){
            $this->GetOrder();
            return count($this->order);
        }

        public function SerializeData(){
            $data = array(
                'ID' => $this->ID,
                'FirstName' => $this->FirstName,
                'LastName' => $this->LastName,
                'username' => $this->username,
                'address' => $this->address,
                'phone' => $this->phone,
                'cart' => $this->cart,
                'Balance' => $this->Balance,
                'order' => serialize($this->order),
            );
            return serialize($data); 
        }

        public function unSerializeData($Serial){
            $data = unserialize($Serial);
            $this->ID = $data['ID'];
            $this->FirstName = $data['FirstName'];
            $this->LastName = $data['LastName'];
            $this->username = $data['username'];
            $this->address = $data['address'];
            $this->phone = $data['phone'];
            $this->cart = $data['cart'];
            $this->Balance = $data['Balance'];
            $this->order = unserialize($data['order']);
        }

        public function AddOrder($idProduct){
            $data = array(
                'idCart' => $this->cart,
                'product_id' => $idProduct,
                'qty' => 1
            );
            $this->db->trans_start();
            $this->db->insert('orders',$data);
            $this->db->trans_complete();
            if($this->db->trans_status() === FALSE){
                $this->db->trans_rollback();
                return FALSE;
            }
            $this->db->trans_commit();
            //$this->db->cache_off();
            return TRUE;
        }

        public function UpdateQty($idProduct,$value){
            if($value == -1) {
                $this->db->where('product_id',$idProduct);
                $qty = $this->db->get('orders')->result_array();

                if($qty[0]['qty'] == 1) $value = 0;
            }
            
            $this->db->trans_start();
           
            $this->db->where('idCart',$this->cart);
            $this->db->where('product_id',$idProduct);
            $this->db->set('qty','qty+'.$value,FALSE);
            $this->db->update('orders');
            $this->db->trans_complete();
            if($this->db->trans_status() === FALSE){
                $this->db->trans_rollback();
                return FALSE;
            }
            $this->db->trans_commit();
            //$this->db->cache_off();
            return TRUE;
        }

        public function DeleteOrder($idProduct){
            if($idProduct !== NULL){
                $this->db->trans_start();
                $this->db->where('idCart',$this->cart);
                $this->db->where('product_id',$idProduct);
                $this->db->delete('orders');
                $this->db->trans_complete();
                if($this->db->trans_status() === FALSE){
                    $this->db->trans_rollback();
                    return FALSE;
                }
                $this->db->trans_commit();
                //$this->db->cache_off();
                return TRUE;
            }
        }

        public function CheckOut($password){
            $this->db->where('user_id',$this->ID);
            $this->db->select('password');
            $query = $this->db->get('user');
            $userData = $query->result_array();
            if(password_verify($password,$userData[0]['password'])){
                //$this->db->cache_off();
                $this->db->where('idCart',$this->cart);
                $this->db->set('status','status+1',false);
                $this->db->update('Cart');
                $dataCart = array(
                    'user_id' => $this->ID,
                    'status' => 0
                );
                $this->db->trans_start();
                $this->db->insert('Cart',$dataCart);
                $this->db->trans_complete();
                if($this->db->trans_status()=== FALSE){
                    $this->db->trans_rollback();
                    return FALSE;
                }
                $this->db->trans_commit();
                $this->GetCart();
                return TRUE;
            }
            return FALSE;
        }

        public function GetAddress(){
            return $this->address;
        }

        public function GetUsername(){
            return $this->username;
        }

        public function GetName(){
            return $this->FirstName . " " . $this->LastName;
        }

        public function GetMobilePhone(){
            return $this->phone;
        }

        public function GetBalance(){
            return $this->Balance;
        }
    }
?>