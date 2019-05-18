<?php

    defined('BASEPATH') or die('No direct access');

    class Login extends CI_Controller {
        public function index() {
            $this->load->model('User');

            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',NULL,TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE),
                'sidebar' => $this->load->view('bootshop/Template/sidebar', NULL, TRUE)
            );
            
            $this->load->view('bootshop/login', $data);
        }
    }
?>