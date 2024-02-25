<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{

    public function __construct(){
		parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('upload');
    }

    function index(){
        $data['supplier'] = $this->UserModel->get_all_data('supplier')->result();
        $this->load->view('admin/templates/header');
        $this->load->view('suppliers/supplier_data', $data);
        $this->load->view('admin/templates/footer');  
    }

    public function add(){
        $this->load->view('admin/templates/header');
        $this->load->view('suppliers/supplier_add');
        $this->load->view('admin/templates/footer');
    }

    public function action_add(){
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $desc = $this->input->post('desc');
            $data_insert = array(
					'name'=>$name,
					'phone'=>$phone,
                    'address'=>$address,
                    'description'=>$desc,
				);
				$this->UserModel->insert('supplier', $data_insert);
				redirect('supplier/index');
            
    }

    public function edit($id){
        $datawhere = array('supplier_id'=>$id);
        $data['supplier'] = $this->UserModel->get_by_id('supplier',$datawhere)->row_object();
        $this->load->view('admin/templates/header');
        $this->load->view('suppliers/supplier_edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit_data(){
        // $this->form_validation->set_rules('name', 'Name', 'required');
        // $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('level', 'Level', 'required');
        // $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        // $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        // $this->form_validation->set_message('is_unique', '%s username sudah dipakai');

            $id = $this->input->post('supplier_id');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $description = $this->input->post('description');
    
            $dataUpdate=array('name'=> $name, 'phone'=>$phone,'description'=>$description,'address'=>$address);
            $this->UserModel->update('supplier', $dataUpdate, 'supplier_id', $id);
            redirect('supplier/index');
    }

    function delete($id){
        $hapus = $this->UserModel->delete('supplier', 'supplier_id', $id);
        redirect('supplier');
    }
}