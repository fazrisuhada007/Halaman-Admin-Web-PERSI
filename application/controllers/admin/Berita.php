<?php

class Berita extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$berita = $this->berita_model->listing();

		$data = array ( 'title' 	=> 'Data Berita',
						'berita'	=> $berita,
						'isi'		=> 'admin/berita/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}

	//TAMBAH Berita
	public function tambah()
	{
		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('judul_berita', 'Judul Berita', 'required|max_length[70]',
				array('required'   => '%s harus diisi',
					  'max_length'=> 'Maksimal judul berita 70 karakter.',));
		
		$valid->set_rules('isi', 'Isi Berita', 'required', 
				array('required'    => '%s harus diisi'));
		

		if($valid->run()) {
			$config['upload_path']   = './asset/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '2400';//dalam kb
			$config['max_width']     = '2024';
			$config['max_height']    = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('photo')){	
		//End validasi

		$data = array ('title'	       => 'Tambah Berita',
					   'error'         => $this->upload->display_errors(),
					   'isi'           => 'admin/berita/tambah'
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
			  	  'id_berita'		=> $i->post('id_berita'),
			      'judul_berita' 	=> $i->post('judul_berita'),
			      'isi'		=> $i->post('isi'),
			      // nama file photo
			      'photo'			=> $upload_photo['upload_data']['file_name'],
			      'tanggal_update'	=> date('Y-m-d H:i:s')
			      );
			$this->berita_model->tambah($data);
			$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
			redirect(base_url('admin/berita'),'refresh');
		}}
		// END MASUK DATABASE
		$data = array ('title'	  => 'Tambah Berita',
					   'isi'	  => 'admin/berita/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);
	}

	//EDIT berita
	public function edit($id_berita)
	{
		//Ambil data berita yang akan diedit
		$berita   = $this->berita_model->detail($id_berita);
		//VALIDASI edit
		$valid = $this->form_validation;

		$valid->set_rules('judul_berita', 'Judul Berita', 'required|max_length[70]', 
				array('required'    => '%s harus diisi',
					  'max_length'  => 'Judul berita Maksimal 70 karakter.',));

		$valid->set_rules('isi', 'Isi Berita', 'required', 
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

		$data = array ('title'	  => 'Edit Berita',
					   'berita'	  => $berita,
					   'error'    => $this->upload->display_errors(),
					   'isi'	  => 'admin/berita/edit'
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
			  'id_berita'	    => $id_berita,
			  'judul_berita'	=> $i->post('judul_berita'),
		      'isi'			    => $i->post('isi'),
		      //Disimpan nama file photo
		      'photo'			=> $upload_photo['upload_data']['file_name'],
			  'tanggal_update'	=> date('Y-m-d H:i:s')
			      );
			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('admin/berita'),'refresh');
		}} else {
			//Edit berita tanpa ganti photo
			$i = $this->input;
			$data = array(
			  'id_berita'	    => $id_berita,
			  'judul_berita'	=> $i->post('judul_berita'),
			  'isi'			    => $i->post('isi'),
		      //Disimpan nama file photo
			  'tanggal_update'	=> date('Y-m-d H:i:s')
			      );
			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('admin/berita'),'refresh');
		}}
		// END MASUK DATABASE
		$data = array ('title'	  => 'Edit Berita',
					   'berita'   => $berita,
					   'isi'	  => 'admin/berita/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);
		// END MASUK DATABASE
	}

		//DELETE berita
		public function delete($id_berita)
		{
			//Proses hapus gambar
			$berita = $this->berita_model->detail($id_berita);
			unlink('./asset/upload/image/'.$berita->photo);
			unlink('./asset/upload/image/thumbs/'.$berita->photo);
			//End proses hapus
			$data = array('id_berita' => $id_berita);
			$this->berita_model->delete($data);
			$this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('admin/berita'),'refresh');
		}

}

?>