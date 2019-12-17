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

		$data = array ( 'title' => 'Data Fasilitas',
						'fasilitas'	=> $fasilitas,
						'isi'	=> 'admin/fasilitas/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH fasilitas
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_fasilitas', 'Nama fasilitas', 'required', 
					array('required' => '%s harus diisi'));

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
			$this->session->set_flashdata('suskes, Data telah ditambah');
			redirect(base_url('admin/fasilitas'),'refresh');
		}
		// END MASUK DATABASE
	}

		//DELETE fasilitas
		public function delete($id_fasilitas)
		{
			$data = array('id_fasilitas' => $id_fasilitas);
			$this->fasilitas_model->delete($data);
			$this->session->set_flashdata('Sukses, Data telah dihapus');
			redirect(base_url('admin/fasilitas'),'refresh');
		}

	//EDIT fasilitas
	public function edit($id_fasilitas)
	{
		$fasilitas = $this->fasilitas_model->detail($id_fasilitas);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_fasilitas', 'Nama Fasilitas', 'required', 
				array('required' => '%s harus diisi'));

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
			$this->session->set_flashdata('suskes, Data telah diedit');
			redirect(base_url('admin/fasilitas'),'refresh');
		}
		// END MASUK DATABASE
	}
}

?>