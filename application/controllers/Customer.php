<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function __construct(){
		parent::__construct();
        $this->load->model('UserModel');
    }

    function index(){
        $data['customer'] = $this->UserModel->get_all_data('customer')->result();
        $this->load->view('admin/templates/header');
        $this->load->view('customers/customer_data', $data);
        $this->load->view('admin/templates/footer');  
    }

    public function add(){
        $this->load->view('admin/templates/header');
        $this->load->view('customers/customer_add');
        $this->load->view('admin/templates/footer');
    }

    public function action_add(){
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $gender = $this->input->post('gender');
            $address = $this->input->post('address');

            $dataInput=array('name'=> $name, 'phone'=>$phone, 'gender'=>$gender,'address'=>$address);
            $this->UserModel->insert('customer', $dataInput);
            redirect('customer/index');
    }

    public function edit($id){
        $datawhere = array('customer_id'=>$id);
        $data['customer'] = $this->UserModel->get_by_id('customer',$datawhere)->row_object();
        $this->load->view('admin/templates/header');
        $this->load->view('customers/customer_edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit_data(){
            $id = $this->input->post('customer_id');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $gender = $this->input->post('gender');
            
    
            $dataUpdate=array('name'=> $name, 'phone'=>$phone,'address'=>$address, 'gender'=>$gender);
            $this->UserModel->update('customer', $dataUpdate, 'customer_id', $id);
            redirect('customer/index');
    }

    function delete($id){
        $hapus = $this->UserModel->delete('customer', 'customer_id', $id);
        redirect('customer');
    }
}