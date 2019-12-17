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

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */