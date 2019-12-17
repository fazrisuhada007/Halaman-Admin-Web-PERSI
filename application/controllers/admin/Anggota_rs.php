<?php

class Anggota_rs extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('anggota_rs_model');
		$this->load->model('user');
		$this->load->model('provinsi_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$anggota_rs = $this->anggota_rs_model->listing();

		$data = array ( 'title'       => 'Data Anggota',
						'anggota_rs'  => $anggota_rs,
						'user'        => $user,
						'isi'	      => 'admin/anggota_rs/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH Anggota_rs
	public function tambah()
	{
		//Ambil data provinsi
		$provinsi = $this->provinsi_model->listing();

		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_lengkap', 'Nama Lengkap', 'required', 
				array('required' => '%s harus diisi'));

		$valid->set_rules('email', 'Email', 'required|valid_email',
				array('required' 	=> '%s harus diisi',
					  'valid_email'	=> '%s tidak valid'));

		$valid->set_rules('password', 'Password', 'required',
				array('required ' => '%s harus diisi'));

		$valid->set_rules('telp', 'No telphon', 'required', 
				array('required' => '%s harus diisi'));

		
		if($valid->run()) {
			$config['upload_path']   = './asset/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '2400';//dalam kb
			$config['max_width']     = '2024';
			$config['max_height']    = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('photo')){	
		//End validasi

		$data = array ('title'	       => 'Tambah Anggota',
					   'provinsi'      => $provinsi,
					   'error'         => $this->upload->display_errors(),
					   'isi'           => 'admin/anggota_rs/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$upload_photo = array('upload_data' => $this->upload->data());

			//create thumbnail photo
			$config['image_library']   = 'gd2';
			$config['source_image']    = './asset/upload/image/'.$upload_photo['upload_data']['file_name'];
			//lokasi folder thumbnail
			$config['new_image']       = './asset/upload/image/thumbs/';
			$config['create_thumb']    = TRUE;
			$config['maintain_ratio']  = TRUE;
			$config['width']           = 250;//pixel
			$config['height']          = 250;//pixel
			$config['thumb_marker']	   = '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
			//end create thumbnail
			$i 	  = $this->input;
			$data = array(
			  	  'id_anggota_rs'		=> $i->post('id_anggota_rs'),
			      'nama_lengkap'=> $i->post('nama_lengkap'),
			      'email'		=> $i->post('email'),
			      'password'	=> MD5($i->post('password')),
			      'telp'		=> $i->post('telp'),
			      'level'		=> $i->post('level'),
			      'id_provinsi' => $i->post('id_provinsi'),
			      // nama file photo
			      'photo'			=> $upload_photo['upload_data']['file_name'],
			      );
			$this->anggota_rs_model->tambah($data);
			$this->session->set_flashdata('suskes, Data telah ditambah');
			redirect(base_url('admin/anggota_rs'),'refresh');
		}}
		// END MASUK DATABASE
		$data = array ('title'	  => 'Tambah Anggota',
					   'provinsi' => $provinsi,
					   'isi'	  => 'admin/anggota_rs/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);
	}

	//EDIT anggota_rs
	public function edit($id_anggota_rs)
	{
		//Ambil data rovinsi
		$provinsi = $this->provinsi_model->listing();

		//Ambil data anggota_rs yang akan diedit
		$anggota_rs   = $this->anggota_rs_model->detail($id_anggota_rs);
		//VALIDASI edit
		$valid = $this->form_validation;

		$valid->set_rules('nama_lengkap', 'Nama Lengkap', 'required', 
				array('required' => '%s harus diisi'));

		$valid->set_rules('email', 'Email', 'required|valid_email',
				array('required' 	=> '%s harus diisi',
					  'valid_email'	=> '%s tidak valid'));

		$valid->set_rules('telp', 'No telphon', 'required', 
				array('required' => '%s harus diisi'));

		if($valid->run()) {
			// Check jika photo diganti
			if(!empty($_FILES['photo']['name'])) { 

			$config['upload_path']   = './asset/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '2400';//dalam kb
			$config['max_width']     = '2024';
			$config['max_height']    = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('photo')){	
		//End validasi

		$data = array ('title'	  => 'Edit Anggota',
					   'anggota_rs'	  => $anggota_rs,
					   'provinsi' => $provinsi,
					   'error'    => $this->upload->display_errors(),
					   'isi'	  => 'admin/anggota_rs/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$upload_photo = array('upload_data' => $this->upload->data());

			//create thumbnail photo
			$config['image_library']   = 'gd2';
			$config['source_image']    = './asset/upload/image/'.$upload_photo['upload_data']['file_name'];
			//lokasi folder thumbnail
			$config['new_image']       = './asset/upload/image/thumbs/';
			$config['create_thumb']    = TRUE;
			$config['maintain_ratio']  = TRUE;
			$config['width']           = 250;//pixel
			$config['height']          = 250;//pixel
			$config['thumb_marker']	   = '';

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
			//end create thumbnail
			$i = $this->input;
			$data = array(
			  'id_anggota_rs'	     => $id_anggota_rs,
			  'nama_lengkap' => $i->post('nama_lengkap'),
		      'email'		 => $i->post('email'),
		      'telp'		 => $i->post('telp'),
		      'id_provinsi'	 => $i->post('id_provinsi'),
		      //Disimpan nama file photo
		      'photo'		 => $upload_photo['upload_data']['file_name']
			      );
			$this->anggota_rs_model->edit($data);
			$this->session->set_flashdata('suskes, Data telah diedit');
			redirect(base_url('admin/anggota_rs'),'refresh');
		}} else {
			//Edit anggota_rs tanpa ganti photo
			$i = $this->input;
			$data = array(
			  'id_anggota_rs'	        => $id_anggota_rs,
			  'nama_lengkap'    => $i->post('nama_lengkap'), 
			  'email'			=> $i->post('email'),
			  'telp'			=> $i->post('telp'),
			  'id_provinsi'		=> $i->post('id_provinsi'),
		      //Disimpan nama file photo
			      );
			$this->anggota_rs_model->edit($data);
			$this->session->set_flashdata('suskes, Data telah diedit');
			redirect(base_url('admin/anggota_rs'),'refresh');
		}}
		// END MASUK DATABASE
		$data = array ('title'	    => 'Edit Anggota_rs',
					   'anggota_rs'       => $anggota_rs,
					   'provinsi'	=> $provinsi,
					   'isi'	    => 'admin/anggota_rs/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);
		// END MASUK DATABASE
	}

		//DELETE anggota_rs
		public function delete($id_anggota_rs)
		{
			//Proses hapus gambar
			$anggota_rs = $this->anggota_rs_model->detail($id_anggota_rs);
			unlink('./asset/upload/image/'.$anggota_rs->photo);
			unlink('./asset/upload/image/thumbs/'.$anggota_rs->photo);
			//End proses hapus
			$data = array('id_anggota_rs' => $id_anggota_rs);
			$this->anggota_rs_model->delete($data);
			$this->session->set_flashdata('Sukses, Data telah dihapus');
			redirect(base_url('admin/anggota_rs'),'refresh');
		}

}

?>