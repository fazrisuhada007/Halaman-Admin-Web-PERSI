<?php

class Pelayanan_medis extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelayanan_medis_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$pelayanan_medis = $this->pelayanan_medis_model->listing();

		$data = array ( 'title' => 'Data Pelayanan Medis',
						'pelayanan_medis'	=> $pelayanan_medis,
						'isi'	=> 'admin/pelayanan medis/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH pelayanan medis
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_pelayanan_medis', 'Nama pelayanan medis', 'required', 
					array('required' => '%s harus diisi'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Tambah Pelayanan Medis',
					   'isi'	=> 'admin/pelayanan medis/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array(
						  'nama_pelayanan_medis'=> $i->post('nama_pelayanan_medis')
						  );
			$this->pelayanan_medis_model->tambah($data);
			$this->session->set_flashdata('suskes, Data telah ditambah');
			redirect(base_url('admin/pelayanan_medis'),'refresh');
		}
		// END MASUK DATABASE
	}

		//DELETE pelayanan medis
		public function delete($id_pelayanan_medis)
		{
			$data = array('id_pelayanan_medis' => $id_pelayanan_medis);
			$this->pelayanan_medis_model->delete($data);
			$this->session->set_flashdata('Sukses, Data telah dihapus');
			redirect(base_url('admin/pelayanan_medis'),'refresh');
		}

	//EDIT pelayanan medis
	public function edit($id_pelayanan_medis)
	{
		$pelayanan_medis = $this->pelayanan_medis_model->detail($id_pelayanan_medis);
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_pelayanan_medis', 'Nama Pelayanan_medis', 'required', 
				array('required' => '%s harus diisi'));

		if($valid->run()===FALSE) {

		$data = array ('title'	=> 'Edit Pelayanan Medis',
					   'pelayanan_medis'	=> $pelayanan_medis,
					   'isi'	=> 'admin/pelayanan medis/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$i 	  = $this->input;
			$data = array('id_pelayanan_medis'		=> $id_pelayanan_medis,
						  'nama_pelayanan_medis' 	=> $i->post('nama_pelayanan_medis')
					      );
			$this->pelayanan_medis_model->edit($data);
			$this->session->set_flashdata('suskes, Data telah diedit');
			redirect(base_url('admin/pelayanan_medis'),'refresh');
		}
		// END MASUK DATABASE
	}
}

?>