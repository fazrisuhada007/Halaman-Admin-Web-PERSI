<?php

class Komentar extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('komentar_model');
		$this->load->model('forum_model');
		$this->load->model('kompartemen_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$id=$this->input->get('id_forum');
		$komentar = $this->komentar_model->listing($id);

		$data = array ( 'title'     => 'Data Komentar',
						'komentar'	=>  $komentar,
						'isi'	    => 'admin/komentar/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	    public function delete()
	    {        
		    $id_komentar = $this->input->post('id');
		    foreach ($id_komentar as $key => $kom) {
		    	$this->komentar_model->delete($kom); 
		    }
		    	echo 'Komentar berhasil dihapus';	

		}
}

?>