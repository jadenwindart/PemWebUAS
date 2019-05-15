<?php
    defined('BASEPATH') or die('No Direct Access');

    class Register extends CI_Controller{

        public function index(){
            $this->load->model('user');
            $this->load->library('form_validation');

            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'header' => $this->load->view('bootshop/Template/header',array('CountOrder' => $this->user->CountOrder()),TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE),
                'footer' => $this->load->view('bootshop/Template/footer',NULL,TRUE)
            );

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('FirstName', 'First Name', 'required');
            $this->form_validation->set_rules('LastName', 'Last Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('postcode', 'PostCode', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('phone', 'Mobile Phone', 'required');
            $this->form_validation->set_error_delimiters('<div style="color:red;">','</div>');
            if($this->form_validation->run() === FALSE){
                $this->load->view('bootshop/register.php',$data);
            }
            else{
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $FirstName = $this->input->post('FirstName');
                $LastName = $this->input->post('LastName');
                $address = $this->input->post('address');
                $city = $this->input->post('city');
                $postcode = $this->input->post('postcode');
                $country = $this->input->post('country');
                $fullAddress = $address . "," . $city . "," . $country . "-".$postcode;
                $phone = $this->input->post('phone');

                $this->user->addUser($username,$password,$FirstName,$LastName,$fullAddress,$phone);
                redirect('Home');
            }
        }
    }
?>