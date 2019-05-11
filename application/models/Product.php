<?php
    defined('BASEPATH') or die('No Direct Access');

    class Product extends CI_Model{

        public function GetAllProduct($search){
            if(isset($search)) $this->db->like('name',$search);
            $query = $this->db->get('product');
            return $query->result_array();
        }
    }