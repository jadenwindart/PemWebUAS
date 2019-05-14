<?php
    defined('BASEPATH') or die('No Direct Access');

    class Product extends CI_Model{

        //private $ListProduct;

        public function GetAllProduct($search){
            if(isset($search)) $this->db->like('name',$search);
            $query = $this->db->get('product');
            $this->ListProduct = $query->result_array();
            return $this->ListProduct;
        }
    }