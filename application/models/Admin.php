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
    }
?>