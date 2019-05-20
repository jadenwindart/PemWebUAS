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
            $this->session->set_userdata('user',$this->user->SerializeData());
            redirect('Home');
        }

        public function IncrementQty($idProduct){
            $this->user->UpdateQty($idProduct,1);
            redirect('Home/Cart');
        }

        public function DecrementQty($idProduct){
            $this->user->UpdateQty($idProduct,-1);
            redirect('Home/Cart');
        }
        
        public function Delete($idProduct){
            $this->user->DeleteOrder($idProduct);
            redirect('Home/Cart');
        }

        public function CheckOut(){
            if($this->user->CheckOut($this->input->post('password'))){
                $data = array(
                    'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                    'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                    'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                    'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
                );
                $this->load->view('bootshop/CheckOutSuccess',$data);
                $this->session->set_userdata('user',$this->user->SerializeData());
            }
            else redirect('Home/CheckOut');
        }
    }
?>