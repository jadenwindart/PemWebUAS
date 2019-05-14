<?php
    defined('BASEPATH') or die('No Direct Access');

    class Home extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('user');
            if(isset($this->session->user)){
                $this->user->unSerializeData($this->session->user);
            }
        }

        public function index(){
            $this->load->model('product');
            $productParam = array('products' => $this->product->GetAllProduct($this->input->post('searchProduct')));
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'carousel' => $this->load->view('bootshop/HomePage/carousel',NULL,TRUE),
                'products' => $this->load->view('bootshop/HomePage/product',$productParam,TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
                
            );
            $this->load->view('bootshop/index.php',$data);
        }
        public function Register(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
            );
            $this->load->view('bootshop/register.php',$data);
        }

        public function LoginCheck(){
            if($this->user->CheckLogin($this->input->post('username'),$this->input->post('password'))){
                $this->session->set_userdata('user',$this->user->SerializeData());
            }
            redirect('/Home');
        }

        public function Login(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
            );
            $this->load->view('bootshop/login.php',$data);
        }

        public function SignOut(){
            $this->session->sess_destroy();
            redirect('/Home');
        }

        public function Search($searchString){
            $this->load->model('product');
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'carousel' => $this->load->view('bootshop/HomePage/carousel',NULL,TRUE),
                'products' => $this->load->view('bootshop/HomePage/product',array('products' => $this->product->SearchProduct()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
                
            );
            $this->load->view('bootshop/index.php',$data);
        }

        public function Cart(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'ProductOrder' => $this->user->GetOrder(),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE),
                'Address' => $this->user->GetAddress()
            );
            $this->load->view('bootshop/CartView',$data);
        }

        public function Account(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'ProductOrder' => $this->user->GetOrder(),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE),
                'Address' => $this->user->GetAddress()
            );
            $this->load->view('bootshop/AccountDetail',$data);
        }

        public function Contact(){
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
                
            );
            $this->load->view('bootshop/contact',$data);
        }
    }
?>