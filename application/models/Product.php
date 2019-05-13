<?php
    defined('BASEPATH') or die('No Direct Access');

    class Product extends CI_Model{

        public function GetAllProduct($search){
            if(isset($search)) $this->db->like('name',$search);
            $query = $this->db->get('product');
            return $query->result_array();
        }

        public function getProduct($id) {
            if(isset($id)) {
                $this->db->where('product_id', $id);
                $query = $this->db->get('product');
                return $query->result_array();
            }
        }
    }