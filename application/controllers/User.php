<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
        $this->load->library('form_validation');
	}

    public function index()
    { 
        $id = $this->session->userdata('user_id');
		$dataWhere = array('user_id' => $id);
		$cek = $this->UserModel->get_by_id('user', $dataWhere)->row_object();
		if ($cek->level != 1) {
			redirect('/');
		} else {
        $data['tampil'] = $this->UserModel->get_all_data('user')->result();
        $this->load->view('admin/templates/header');
        $this->load->view('user/user_data', $data);
        $this->load->view('admin/templates/footer');
        }
    }

    public function add(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]', 
            array('matches' => ' %s tidak sesuai dengan password')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s username sudah dipakai');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('admin/templates/header');
                $this->load->view('user/user_add');
                $this->load->view('admin/templates/footer');
        }
        else
        {
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
            $address = $this->input->post('address');
            $level = $this->input->post('level');

            $dataInput=array('name'=> $name, 'username'=>$username,'password'=>$password,'address'=>$address,'level'=>$level);
            $this->UserModel->insert('user', $dataInput);
            redirect('user/index');
        } 
    }

    public function edit($id){
        $dataWhere = array('user_id'=>$id);
        $data['user'] = $this->UserModel->get_by_id('user', $dataWhere)->row_object();
        $this->load->view('admin/templates/header');
        $this->load->view('user/user_edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit_data(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]', 
            array('matches' => ' %s tidak sesuai dengan password')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s username sudah dipakai');

        // if($this->form_validation->run() !== FALSE){
            $id = $this->input->post('user_id');
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
            $address = $this->input->post('address');
            $level = $this->input->post('level');
    
            $dataUpdate=array('name'=> $name, 'username'=>$username,'password'=>$password,'address'=>$address,'level'=>$level);
            $this->UserModel->update('user', $dataUpdate, 'user_id', $id);
            redirect('user/index');
        // }else{
        //     $this->edit();
        // }  
    }


    public function delete($id){
		$this->UserModel->delete('user', 'user_id', $id);
		redirect('user/index');
	}


    


}
