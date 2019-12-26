<?php

class Fasilitas extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/fasilitas_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$tbl_anggota_rs = $this->fasilitas_model->listing();

		$data = array ( 'title'         => 'Data Fasilitas',
						'tbl_anggota_rs'=> $tbl_anggota_rs,
						'isi'	        => 'user/fasilitas/list'
						);

		$this->load->view('user/layout/wrapper', $data);
	}

		//DELETE fasilitas
		public function delete($id_anggota_rumah_sakit)
		{
			$data = array('id_anggota_rumah_sakit' => $id_anggota_rumah_sakit);
			$this->fasilitas_model->delete($data);
			$this->session->set_flashdata('Sukses', 'Data telah dihapus');
			redirect(base_url('user/fasilitas'),'refresh');
		}

}

?>