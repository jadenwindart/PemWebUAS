<?php
    defined('BASEPATH') or die('No Direct Access');

    class User extends CI_Model{

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
    }
?>