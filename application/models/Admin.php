<?php

    defined('BASEPATH') or die('No Direct Access');

    class Admin extends CI_Model{

        public function CheckLogin($username,$password){
            $this->db->where('username',$username);
            $query = $this->db->get('admin');
            $userData = $query->result_array();
            if(password_verify($password,$userData[0]['password'])){
                return TRUE;
            }
            return FALSE;
        }

        public function GetAllTransaction(){
            $this->db->join('user','user.user_id = Cart.user_id');
            $this->db->select('username,idCart,status');
            $query = $this->db->get('cart');
            return $query->result_array();
        }
    }
?>