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
            return TRUE;
        }

        public function CheckLogin($username,$password){
            $this->db->where('username',$username);
            $query = $this->db->get('user');
            $userData = $query->result_array();
            if(password_verify($password,$userData[0]['password'])){
                $this->ID = $userData[0]['user_id'];
                $this->FirstName = $userData[0]['first_name'];
                $this->LastName = $userData[0]['last_name'];
                $this->username = $userData[0]['username'];
                $this->address = $userData[0]['address'];
                $this->phone = $userData[0]['phone'];
                $this->Balance = $userData[0]['Balance'];
                return TRUE;
            }
            return FALSE;
        }

        public function FetchOrder(){
            $this->db->join('product','product.product_id = orders.product_id');
            $this->db->where('user_id',$this->ID);
            $query = $this->db->get('orders');
            $this->cart = $query->result_array();
            return $this->cart;
        }

        public function GetOrder(){
            if($this->cart === NULL){
                return $this->FetchOrder();
            }
            return $this->cart;
        }

        public function CountOrder(){
            if(!isset($this->cart)) $this->GetOrder();
            return count($this->cart);
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
                'Balance' => $this->Balance
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
        }

        public function AddOrder($idProduct){
            $data = array(
                'user_id' => $this->ID,
                'product_id' => $idProduct,
                'qty' => 1
            );
            $this->db->trans_start();
            $this->db->insert('orders',$data);
            $this->FetchOrder();
            $this->db->trans_complete();
            if($this->db->trans_status() === FALSE){
                $this->db->trans_rollback();
                return FALSE;
            }
            $this->db->trans_commit();
            
            return TRUE;
        }

        public function UpdateQty($idProduct,$value){
            
            $this->db->trans_start();
            $this->db->where('user_id',$this->ID);
            $this->db->where('product_id',$idProduct);
            $this->db->set('qty','qty+'.$value,FALSE);
            $this->db->update('orders');
            $this->FetchOrder();
            $this->db->trans_complete();
            if($this->db->trans_status() === FALSE){
                $this->db->trans_rollback();
                return FALSE;
            }
            $this->db->trans_commit();
            
            return TRUE;
        }

        public function DeleteOrder($idProduct){
            if($idProduct !== NULL){
                $this->db->trans_start();
                $this->db->where('user_id',$this->ID);
                $this->db->where('product_id',$idProduct);
                $this->db->delete('orders');
                $this->FetchOrder();
                $this->db->trans_complete();
                if($this->db->trans_status() === FALSE){
                    $this->db->trans_rollback();
                    return FALSE;
                }
                $this->db->trans_commit();
                
                return TRUE;
            }
        }

        public function CheckOut($password){
            $this->db->where('user_id',$this->ID);
            $this->db->select('password');
            $query = $this->db->get('user');
            $userData = $query->result_array();
            if(password_verify($password,$userData[0]['password'])){
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