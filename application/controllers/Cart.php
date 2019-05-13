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

        public function IncrementQty($idProduct){
            $this->user->IncreaseQty($idProduct,1);
            redirect('Home/Cart');
        }

        public function DecremenetQty($idProduct){
            $this->user->DecreaseQty($idProduct,1);
            redirect('Home/Cart');
        }
        
    }
?>