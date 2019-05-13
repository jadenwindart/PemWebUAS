<?php
    defined('BASEPATH') or die('No Direct Access');

    class Cart extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('user');
            if(isset($this->session->user)){
                $this->user->unSerializeData($this->session->user);
            }
            else{
                redirect('Home/Login');
            }
        }

        public function Add($idProduct){
            $this->user->AddOrder($idProduct);
            redirect('Home');
        }

        
    }
?>