<?php
    defined('BASEPATH') or die('No Direct Access');

    class Product extends CI_Model{

        //private $ListProduct;

        public function GetAllProduct($search){
            //$this->db->cache_on();
            $query = $this->db->get('product');
            $data = $query->result_array();
            if(isset($search) || $search !== NULL){
                $filteredArray = array_filter($data,function($var) use ($search){
                    if(strpos(strtolower($var['name']),strtolower($search)) !== FALSE) return TRUE;
                    return FALSE;
                });
            }
            else{
                $filteredArray = $data;
            }

            return $filteredArray;
        }

        public function getProduct($id) {
            if(isset($id)) {
                $this->db->where('product_id', $id);
                $query = $this->db->get('product');
                return $query->result_array();
            }
        }

        public function getProductByCategory($cat) {
            if(isset($cat)) {
                $this->db->where('category', $cat);
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

        public function getAllCategory() {
            $query = $this->db->get('category');

            return $query->result_array();
        }

        public function getCategory($cat_id) {
            $this->db->where('cat_id', $cat_id);
            $query = $this->db->get('category');

            return $query->result_array();
        }
    }