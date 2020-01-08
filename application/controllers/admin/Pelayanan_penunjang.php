<?php

class Pelayanan_penunjang extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelayanan_penunjang_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$pelayanan_penunjang = $this->pelayanan_penunjang_model->listing();

		$data = array ( 'title' => 'Data Pelayanan Penunjang',
						'pelayanan_penunjang'	=> $pelayanan_penunjang,
						'isi'	=> 'admin/pelayanan penunjang/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH pelayanan penunjang
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_pelayanan_penunjang', 'Nama pelayanan penunjang', 'required', 
					array('required' => '%s harus diisi'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Pelayanan Penunjang',
					   'isi'	=> 'admin/pelayanan penunjang/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array(
						  'nama_pelayanan_penunjang'=> $i->post('nama_pelayanan_penunjang')
						  );
			$this->pelayanan_penunjang_model->tambah($data);
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
			redirect(base_url('admin/pelayanan_penunjang'),'refresh');
		}
		// END MASUK DATABASE
	}

		//DELETE pelayanan penunjang
		public function delete($id_pelayanan_penunjang)
		{
			$data = array('id_pelayanan_penunjang' => $id_pelayanan_penunjang);
			$this->pelayanan_penunjang_model->delete($data);
			$this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('admin/pelayanan_penunjang'),'refresh');
		}

	//EDIT pelayanan penunjang
	public function edit($id_pelayanan_penunjang)
	{
		$pelayanan_penunjang = $this->pelayanan_penunjang_model->detail($id_pelayanan_penunjang);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_pelayanan_penunjang', 'Nama Pelayanan_penunjang', 'required', 
				array('required' => '%s harus diisi'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Edit Pelayanan Penunjang',
					   'pelayanan_penunjang'	=> $pelayanan_penunjang,
					   'isi'	=> 'admin/pelayanan penunjang/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_pelayanan_penunjang'		=> $id_pelayanan_penunjang, 
						  'nama_pelayanan_penunjang' 	=> $i->post('nama_pelayanan_penunjang')
					      );
			$this->pelayanan_penunjang_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('admin/pelayanan_penunjang'),'refresh');
		}
		// END MASUK DATABASE
	}
}

?>