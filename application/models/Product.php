<?php
    defined('BASEPATH') or die('No Direct Access');

    class Product extends CI_Model{

        //private $ListProduct;

        public function GetAllProduct($search){
                $this->db->cache_on();
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
    }