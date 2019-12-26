<?php

class Forum extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('forum_model');
		$this->load->model('kompartemen_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$forum = $this->forum_model->listing();

		$data = array ( 'title' => 'Data Forum',
						'forum'	=> $forum,
						'isi'	=> 'user/forum/list'
						);

		$this->load->view('user/layout/wrapper', $data);
	}


	//TAMBAH Forum
	public function tambah()
	{
		//Ambil data kompartemen
		$kompartemen = $this->kompartemen_model->listing();

		//VALIDASI INPUT
		$valid = $this->form_validation;

		// $valid->set_rules('id_kompartemen', 'Kompartemen', 'required', 
		// 		array('required' => '%s harus diisi'));

		$valid->set_rules('judul_forum', 'Judul Forum', 'required',
				array('required ' => '%s harus diisi'));

		$valid->set_rules('deskripsi', 'Deskripsi', 'required', 
				array('required' => '%s harus diisi'));
		
		if($valid->run()) {
			$config['upload_path']   = './asset/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '2400';//dalam kb
			$config['max_width']     = '2024';
			$config['max_height']    = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('photo_forum')){	
		//End validasi

		$data = array ('title'	       => 'Tambah Forum',
					   'kompartemen'   => $kompartemen,
					   'error'         => $this->upload->display_errors(),
					   'isi'           => 'admin/forum/tambah'
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
			// Input data ke dalam 2 tabel
			$data = array(
				  'id_forum'	   => $i->post('id_forum'),
			  	  'id_rumah_sakit' => $this->session->userdata('id_rumah_sakit'),
			      'id_kompartemen' => $i->post('id_kompartemen'),
			      'judul_forum'	   => $i->post('judul_forum'),
			      // nama file photo
			      'photo_forum'	   => $upload_photo['upload_data']['file_name'],
			      'deskripsi'	   => $i->post('deskripsi'),
			      'tanggal_update' => date('Y-m-d H:i:s')
			      );
			$this->forum_model->tambah($data);
			$this->session->set_flashdata('suskes, Data telah diedit');
			redirect(base_url('admin/forum'),'refresh');
		}}
		// END MASUK DATABASE
		$data = array ('title'	  => 'Tambah Forum',
					   'kompartemen' => $kompartemen,
					   'isi'	  => 'admin/forum/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);
	}

	//EDIT forum
	public function edit($id_forum)
	{
		//Ambil data forum yang akan diedit
		$forum   = $this->forum_model->detail($id_forum);
		//Ambil data rovinsi
		$kompartemen = $this->kompartemen_model->listing();

		//VALIDASI edit
		$valid = $this->form_validation;

		// $valid->set_rules('id_kompartemen', 'Kompartemen', 'required', 
		// 		array('required' => '%s harus diisi'));

		$valid->set_rules('judul_forum', 'Judul Forum', 'required',
				array('required ' => '%s harus diisi'));

		$valid->set_rules('deskripsi', 'Deskripsi', 'required', 
				array('required' => '%s harus diisi'));

		if($valid->run()) {
			// Check jika photo diganti
			if(!empty($_FILES['photo_forum']['name'])) { 

			$config['upload_path']   = './asset/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '2400';//dalam kb
			$config['max_width']     = '2024';
			$config['max_height']    = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('photo_forum')){	
		//End validasi

		$data = array ('title'	     => 'Edit Forum',
					   'forum'	     => $forum,
					   'kompartemen' => $kompartemen,
					   'error'       => $this->upload->display_errors(),
					   'isi'	     => 'admin/forum/edit'
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
			  'id_forum'        => $id_forum,
		      // 'id_rumah_sakit'  => $i->post('id_rumah_sakit'),
		      'id_kompartemen'	=> $i->post('id_kompartemen'),
		      'judul_forum'	    => $i->post('judul_forum'),
		      //Disimpan nama file photo
		      'photo_forum'		=> $upload_photo['upload_data']['file_name'],
		      'deskripsi'	    => $i->post('deskripsi'),
		      'tanggal_update'  => date('Y-m-d H:i:s')
			      );
			$this->forum_model->edit($data);
			$this->session->set_flashdata('suskes, Data telah diedit');
			redirect(base_url('admin/forum'),'refresh');
		}} else {
			//Edit forum tanpa ganti photo
			$i = $this->input;
			$data = array(
			  'id_forum'        => $id_forum,
		      // 'id_rumah_sakit'  => $i->post('id_rumah_sakit'),
		      'id_kompartemen'	=> $i->post('id_kompartemen'),
		      'judul_forum'	    => $i->post('judul_forum'),
		      //Disimpan nama file photo
		      'deskripsi'	    => $i->post('deskripsi'),
		      'tanggal_update'  => date('Y-m-d H:i:s')
			      );
			$this->forum_model->edit($data);
			$this->session->set_flashdata('suskes, Data telah diedit');
			redirect(base_url('admin/forum'),'refresh');
		}}
		// END MASUK DATABASE
		$data = array ('title'	     => 'Edit Forum',
					   'forum'       => $forum,
					   'kompartemen' => $kompartemen,
					   'isi'	     => 'admin/forum/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);
		// END MASUK DATABASE
	}

		//DELETE forum
		public function delete($id_forum)
		{
			//Proses hapus gambar
			$forum = $this->forum_model->detail($id_forum);
			unlink('./asset/upload/image/'.$forum->photo_forum);
			unlink('./asset/upload/image/thumbs/'.$forum->photo_forum);
			//End proses hapus
			$data = array('id_forum' => $id_forum);
			$this->forum_model->delete($data);
			$this->session->set_flashdata('Sukses, Data telah dihapus');
			redirect(base_url('admin/forum'),'refresh');
		} 

}

?>