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

            $this->form_validation->set_rules('username', 'Username',
                array(
                    'alpha_numeric',
                    array(
                        'callback',
                        function($username) {
                            if(!empty($username)) {
                                if($this->user->CheckUsernameUnique($username)) {
                                    return TRUE;
                                }
                                else {
                                    $this->form_validation->set_message('callback', 'Username has been taken.');
                                    return FALSE;
                                }
                            }
                            else {
                                $this->form_validation->set_message('callback', 'The {field} field is required.');
                                return FALSE;
                            }
                        }
                    )
                )
            );
            $this->form_validation->set_rules('FirstName', 'First Name', 'required|alpha');
            $this->form_validation->set_rules('LastName', 'Last Name', 'required|alpha');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('retype_pass', 'Retype Password', 
                array(
                    array(
                        'callback',
                        function($retype) {
                            if(!empty($retype)) {
                                if($retype == $this->input->post('password')) {
                                    return TRUE;
                                }
                                else {
                                    $this->form_validation->set_message('callback', 'Retyped password not match.');
                                    return FALSE;
                                }
                            }
                            else {
                                $this->form_validation->set_message('callback', 'The {field} field is required.');
                                return FALSE;
                            }
                        }
                    )
                )
            );
            $this->form_validation->set_rules('address', 'Address', 'required|alpha_numeric');
            $this->form_validation->set_rules('city', 'City', 'required|alpha');
            $this->form_validation->set_rules('postcode', 'PostCode', 'required|numeric');
            $this->form_validation->set_rules('country', 'Country', 'required|alpha');
            $this->form_validation->set_rules('phone', 'Mobile Phone', 'required|numeric');
            $this->form_validation->set_error_delimiters('<p style="color:red;">','</p>');
            
            if($this->form_validation->run() == FALSE){
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