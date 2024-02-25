<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

    public function login(){

        $this->load->view('admin/login');
    }

    public function process(){

        $u = $this->input->post('username');
		$p = sha1($this->input->post('password'));
		
		$cek = $this->UserModel->cek_login_admin($u, $p)->num_rows();
		$result = $this->UserModel->cek_login_admin($u, $p)->row_object();

		if ($cek > 0) {
			$data_session = array(
				'user_id'  =>  $result->user_id,
				'username' => $u,
				'password' => $p,
				'level'	   => $result->level
			);
			$this->session->set_userdata($data_session);
            echo "<script>alert('Anda berhasil Login!')</script>";
			redirect('/');
		} else {
            $this->session->set_flashdata('name','Username atau Password salah!');
			redirect('auth/login');
		}
	}  

    public function logout(){
        $this->session->sess_destroy();
        // $param = array('user_id', 'level');
        // $this->session->unset_userdata($param);
        redirect('auth/login');
    }
}
