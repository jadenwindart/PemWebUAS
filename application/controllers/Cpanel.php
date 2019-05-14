<?php
class Cpanel extends CI_Controller{
        
    public function index(){
        redirect('Cpanel/table');
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
        $this->load->view('cpanel',$data);
    }

    function edit_description($value,$primary_key){
        return "<textarea name='Deskripsi'> $value </textarea>";
    }

    function add_description(){
        return "<textarea name='Deskripsi'> </textarea>";
    }
}
?>