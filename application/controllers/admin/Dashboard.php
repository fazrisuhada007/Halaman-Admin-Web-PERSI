<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	//Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		//Proteksi halaman
		$this->simple_login->cek_login();
	}

	//Halaman utama/dashboard
	public function index()
	{
		$data = array( 'title'		=> 'Halaman Administrator',
					   'isi'		=> 'admin/dashboard/list'
					 );
		$this->load->view('admin/layout/wrapper', $data);
		
	}

	//Halaman utama/dashboard
	public function setting()
	{
		$data = array( 'title'		=> 'Halaman Administrator',
					   'isi'		=> 'admin/dashboard/setting'
					 );
		$this->load->view('admin/layout/wrapper', $data);
		
	}

	// Simpan Profil
	public function simpan(){
		$data = [
			'nama'	=> $this->input->post('nama'),
			'telp'	=> $this->input->post('telp'),
			'alamat'	=> $this->input->post('alamat'),
			// 'photo'	=> $this->input->post('photo'),
		];
		$this->session->set_userdata('nama', $this->input->post('nama'));
		$this->session->set_userdata('telp', $this->input->post('telp'));
		$this->session->set_userdata('alamat', $this->input->post('alamat'));
		// $this->session->set_userdata('photo', $this->input->post('photo'));
		$this->db->where('id_admin', $this->session->userdata('id_user'));
		$this->db->update('admin',$data);

		echo json_encode($data);
	}

	// Simpan pasword
	public function simpan2(){
		$data = [
			'email'	    => $this->input->post('email'),
			'password'	=> MD5($this->input->post('password')),
		];
		$this->session->set_userdata('email', $this->input->post('email'));
		// $this->session->set_userdata('photo', $this->input->post('photo'));
		$this->db->where('id_admin', $this->session->userdata('id_user'));
		$this->db->update('admin',$data);

		echo json_encode($data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */