<?php

class Fasilitas extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('fasilitas_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$fasilitas = $this->fasilitas_model->listing();

		$data = array ( 'title'     => 'Data Fasilitas',
						'fasilitas'	=> $fasilitas,
						'isi'	    => 'admin/fasilitas/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH fasilitas
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_fasilitas', 'nama fasilitas',
						  'required|is_unique[fasilitas.nama_fasilitas]|max_length[100]', 
					array('required'  => '%s harus diisi.',
						  'is_unique' => '%s sudah ada, buat nama fasilitas baru.',
						  'max_length'=> 'maksimal nama fasilitas 100 karakter.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Fasilitas',
					   'isi'	=> 'admin/fasilitas/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array(
						  'nama_fasilitas'=> $i->post('nama_fasilitas')
						  );
			$this->fasilitas_model->tambah($data);
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
			redirect(base_url('admin/fasilitas'),'refresh');
		}
		// END MASUK DATABASE
	}

	//EDIT fasilitas
	public function edit($id_fasilitas)
	{
		$fasilitas = $this->fasilitas_model->detail($id_fasilitas);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_fasilitas', 'nama fasilitas',
						  'required|is_unique[fasilitas.nama_fasilitas]|max_length[100]', 
					array('required'  => '%s harus diisi.',
						  'is_unique' => '%s sudah ada, buat nama fasilitas baru.',
						  'max_length'=> 'maksimal nama fasilitas 100 karakter.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Edit Fasilitas',
					   'fasilitas'	=> $fasilitas,
					   'isi'	=> 'admin/fasilitas/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_fasilitas'	=> $id_fasilitas,
						  'nama_fasilitas' 	=> $i->post('nama_fasilitas')
					      );
			$this->fasilitas_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('admin/fasilitas'),'refresh');
		}
		// END MASUK DATABASE
	}

	//DELETE fasilitas
		public function delete($id_fasilitas)
		{
			$data = array('id_fasilitas' => $id_fasilitas);
			$this->fasilitas_model->delete($data);
			$this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('admin/fasilitas'),'refresh');
		}
}

?>