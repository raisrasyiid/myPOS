<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct(){
		parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('upload');
    }

    function index(){
        $data['category'] = $this->UserModel->get_all_data('p_category')->result();
        $this->load->view('admin/templates/header');
        $this->load->view('category/category_data', $data);
        $this->load->view('admin/templates/footer');  
    }

    public function add(){
        $this->load->view('admin/templates/header');
        $this->load->view('category/category_add');
        $this->load->view('admin/templates/footer');
    }

    public function action_add(){
            $name = $this->input->post('name');
            $data_insert = array(
					'name'=>$name,
				);
				$this->UserModel->insert('p_category', $data_insert);
				redirect('category/index');
            
    }

    public function edit($id){
        $datawhere = array('category_id'=>$id);
        $data['category'] = $this->UserModel->get_by_id('P_category',$datawhere)->row_object();
        $this->load->view('admin/templates/header');
        $this->load->view('category/category_edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit_data(){
            $id = $this->input->post('category_id');
            $name = $this->input->post('name');
            
            $dataUpdate=array('name'=> $name);
            $this->UserModel->update('p_category', $dataUpdate, 'category_id', $id);
            redirect('category/index');
    }

    function delete($id){
        $hapus = $this->UserModel->delete('p_category', 'category_id', $id);
        redirect('category');
    }
}