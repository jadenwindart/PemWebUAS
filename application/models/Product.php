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

        public function getTopProduct() {
            $this->db->order_by('product_id', 'DESC');
            $this->db->limit(2);
            $query = $this->db->get('product');

            return $query->result_array();
        }

        public function getCategory() {
            $query = $this->db->get('category');

            return $query->result_array();
        }
    }