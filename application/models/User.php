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

        public function addUser($username,$password,$fname,$lname,$address,$phone){
            $passwordHash = password_hash($password,PASSWORD_BCRYPT);
            $data = array(
                'username' => $username,
                'password' => $passwordHash,
                'first_name' => $fname,
                'last_name' => $lname,
                'address' => $address,
                'phone' => $phone
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
            var_dump($userData);
            if(password_verify($password,$userData[0]['password'])){
                $this->ID = $userData[0]['user_id'];
                $this->FirstName = $userData[0]['first_name'];
                $this->LastName = $userData[0]['last_name'];
                $this->username = $userData[0]['username'];
                $this->address = $userData[0]['address'];
                $this->phone = $userData[0]['phone'];
                return TRUE;
            }
            return FALSE;
        }

        public function GetOrder(){
            $this->db->join('product','product.product_id = orders.product_id');
            $this->db->where('user_id',$this->ID);
            $query = $this->db->get('orders');
            $this->cart = $query->result_array();
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
                'cart' => $this->cart
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
        }
    }
?>