<?php
    defined('BASEPATH') or die('No Direct Access');

    class Home extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('user');
        }

        public function index(){
            $this->load->model('product');
            $productParam = array('products' => $this->product->GetAllProduct($this->input->post('searchProduct')));
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',NULL,TRUE),
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
                'header' => $this->load->view('bootshop/Template/header',NULL,TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
            );
            $this->load->view('bootshop/register.php',$data);
        }

        public function Login(){
            if($this->user->CheckLogin($this->input->post('username'),$this->input->post('password'))){
                $this->session->set_userdata('user',$this->user->SerializeData());
            }
            redirect('/Home');
        }

        public function SignOut(){
            $this->session->sess_destroy();
            redirect('/Home');
        }

        public function Search($searchString){
            $this->load->model('product');
            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',NULL,TRUE),
                'carousel' => $this->load->view('bootshop/HomePage/carousel',NULL,TRUE),
                'products' => $this->load->view('bootshop/HomePage/product',array('products' => $this->product->SearchProduct()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
                
            );
            $this->load->view('bootshop/index.php',$data);
        }
    }
?>