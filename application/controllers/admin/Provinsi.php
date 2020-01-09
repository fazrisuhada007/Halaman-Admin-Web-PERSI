<?php

class Provinsi extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('provinsi_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA Provinsi
	public function index()
	{
		$provinsi = $this->provinsi_model->listing();

		$data = array ( 'title' => 'Data Provinsi',
						'provinsi'	=> $provinsi,
						'isi'	=> 'admin/provinsi/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH Provinsi
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_provinsi', 'nama provinsi',
						  'required|is_unique[provinsi.nama_provinsi]|max_length[100]', 
					array('required'  => '%s harus diisi.',
						  'is_unique' => '%s sudah ada, buat nama provinsi baru.',
						  'max_length'=> 'maksimal nama provinsi 100 karakter.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Provinsi',
					   'isi'	=> 'admin/provinsi/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('nama_provinsi'=> $i->post('nama_provinsi'));
			$this->provinsi_model->tambah($data);
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
			redirect(base_url('admin/provinsi'),'refresh');
		}
		// END MASUK DATABASE
	}

	//EDIT Provinsi
	public function edit($id_provinsi)
	{
		$provinsi = $this->provinsi_model->detail($id_provinsi);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_provinsi', 'nama provinsi',
						  'required|is_unique[provinsi.nama_provinsi]|max_length[100]', 
					array('required'  => '%s harus diisi.',
						  'is_unique' => '%s sudah ada, buat nama provinsi baru.',
						  'max_length'=> 'maksimal nama provinsi 100 karakter.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Edit Provinsi',
					   'provinsi'	=> $provinsi,
					   'isi'	=> 'admin/provinsi/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_provinsi'		=> $id_provinsi,
						  'nama_provinsi' 	=> $i->post('nama_provinsi')
					      );
			$this->provinsi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
			redirect(base_url('admin/provinsi'),'refresh');
		}
		// END MASUK DATABASE
	}

		//DELETE Provinsi
		public function delete($id_provinsi)
		{
			$data = array('id_provinsi' => $id_provinsi);
			$this->provinsi_model->delete($data);
			$this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('admin/provinsi'),'refresh');
		}
}

?>