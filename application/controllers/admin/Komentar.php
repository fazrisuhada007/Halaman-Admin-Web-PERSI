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

		//DELETE komentar
		public function delete($id_komentar)
		{
			
			$data = array('id_komentar' => $id_komentar);
			$this->komentar_model->delete($data);
			$this->session->set_flashdata('sukses', 'Data telah dihapus');
			redirect(base_url('admin/komentar/?id_forum='.$forum->id_forum),'refresh');
		}
}

?>