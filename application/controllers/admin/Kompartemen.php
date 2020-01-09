<?php

class Kompartemen extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kompartemen_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$kompartemen = $this->kompartemen_model->listing();

		$data = array ( 'title'      => 'Data Kompartemen',
						'kompartemen'=> $kompartemen,
						'isi'     	 => 'admin/kompartemen/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH kompartemen
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_kompartemen', 'nama kompartemen',
						  'required|is_unique[kompartemen.nama_kompartemen]|max_length[100]', 
					array('required'  => '%s harus diisi.',
						  'is_unique' => '%s sudah ada, buat nama kompartemen baru.',
						  'max_length'=> 'maksimal nama kompartemen 100 karakter.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Kompartemen',
					   'isi'	=> 'admin/kompartemen/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array(
						  'nama_kompartemen'=> $i->post('nama_kompartemen')
						  );
			$this->kompartemen_model->tambah($data);
			$this->session->set_flashdata('sukses', 'sukses diproses');
			redirect(site_url('admin/kompartemen'),'refersh');
		}
		// END MASUK DATABASE
	}

	//EDIT kompartemen
	public function edit($id_kompartemen)
	{
		$kompartemen = $this->kompartemen_model->detail($id_kompartemen);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_kompartemen', 'nama kompartemen',
						  'required|is_unique[kompartemen.nama_kompartemen]|max_length[100]', 
					array('required'  => '%s harus diisi.',
						  'is_unique' => '%s sudah ada, buat nama kompartemen baru.',
						  'max_length'=> 'maksimal nama kompartemen 100 karakter.'));

		if($valid->run()===FALSE) {

		$data = array ('title'	    => 'Edit Kompartemen',
					   'kompartemen'=> $kompartemen,
					   'isi'	    => 'admin/kompartemen/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_kompartemen'		=> $id_kompartemen,
						  'nama_kompartemen' 	=> $i->post('nama_kompartemen')
					      );
			$this->kompartemen_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil disimpan');
			redirect(base_url('admin/kompartemen'),'refresh');
		}
		// END MASUK DATABASE
	}

	//DELETE kompartemen
	public function delete($id_kompartemen)
	{
	 	$data = array('id_kompartemen' => $id_kompartemen);
		$this->kompartemen_model->delete($data);
		$this->session->set_flashdata('sukses','sukses diproses');
		redirect(base_url('admin/kompartemen'),'refresh');
    }
}

?>