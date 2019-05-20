<?php
class Cpanel extends CI_Controller{
        
    public function index(){
        if(isset($this->session->admin)){
            redirect('Cpanel/table');
        }
        else{
            redirect('Cpanel/Login');
        }
    }

    function table(){
        $this->load->library('grocery_CRUD');
        $crud = new grocery_CRUD();
        $crud->set_table('product')
                ->columns('name','description','price')
                ->display_as('PosterLink','Poster')
                ->fields('name','description','price');

        $output = $crud->render();
        $data['crud'] = get_object_vars($output);
        $data['style'] = $this->load->view('include/cpanel_style',$data,TRUE);
        $data['script'] = $this->load->view('include/cpanel_script',$data,TRUE);
        $data['navbar'] = $this->load->view('Cpanel_navbar',NULL,TRUE);
        $this->load->view('cpanel',$data);
    }

    function edit_description($value,$primary_key){
        return "<textarea name='Deskripsi'> $value </textarea>";
    }

    function add_description(){
        return "<textarea name='Deskripsi'> </textarea>";
    }

    public function Login(){
        $this->load->model('admin');
        $this->load->library('form_validation');

            $data = array(
                'style' => $this->load->view('bootshop/Template/style',NULL,TRUE),
                'script' => $this->load->view('bootshop/Template/script',NULL,TRUE)
            );

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('pass', 'Password', 'required');
            $this->form_validation->set_error_delimiters('<div style="color:red;">','</div>');
            if($this->form_validation->run() === FALSE){
                $this->load->view('Cpanel_login',$data);
            }
            else{
                $username = $this->input->post('username');
                $password = $this->input->post('pass');
                if($this->admin->CheckLogin($username,$password)){
                    $this->session->set_userdata('admin',$username);
                }
                redirect('Cpanel');
            }
    }

    public function SignOut(){
        $this->session->sess_destroy();
        redirect('/Cpanel');
    }
}
?>