<?php defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model{

    public function cek_login($post){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
	}

    public function cek_login_admin($u, $p){
		$q = $this->db->get_where('user', array('username'=>$u, 'password'=>$p));
		return $q;
	}

	//get all data
	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	//insert data
	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	//edit data
	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	//delete data
	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val)); 
	}

	//get by id
	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}
}
