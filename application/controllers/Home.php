<?php
    defined('BASEPATH') or die('No Direct Access');

    class Home extends CI_Controller{
        public function index(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',NULL,TRUE),
                'carousel' => $this->load->view('bootshop/HomePage/carousel',NULL,TRUE),
                'products' => $this->load->view('bootshop/HomePage/product',NULL,TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
                
            );
            $this->load->view('bootshop/index.php',$data);
        }
        public function Register(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',NULL,TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
            );
            $this->load->view('bootshop/register.php',$data);
        }
    }
?>