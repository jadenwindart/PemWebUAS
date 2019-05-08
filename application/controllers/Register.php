<?php
    defined('BASEPATH') or die('No Direct Access');

    class Register extends CI_Controller{

        public function index(){
            $this->load->model('user');

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
?>