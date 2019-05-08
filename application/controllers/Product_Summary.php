<?php
    defined('BASEPATH') or die('No Direct Access');

    class Product_Summary extends CI_Controller{
        public function index(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',NULL,TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
                
            );
            $this->load->view('bootshop/product_summary',$data);
        }
    }
?>