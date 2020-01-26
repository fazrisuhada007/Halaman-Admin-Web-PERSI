<?php

class User extends CI_Controller
{
	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('provinsi_model');
		//PROTEKSI HALAMAN
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array ( 'title' => 'Data Anggota',
						'user'	=> $user,
						'isi'	=> 'admin/user/list'
						);

		$this->load->view('admin/layout/wrapper', $data);
	}


	//TAMBAH User
	public function tambah()
	{
		//Ambil data provinsi
		$provinsi = $this->provinsi_model->listing();

		//VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama_lengkap', 'Nama User', 'required|max_length[15]',
				array('required' => '%s harus diisi.',
					  'max_length' => 'Maksimal nama user 15 karakter.'));

		$valid->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]',
				array('required' 	=> '%s harus diisi.',
					  'valid_email'	=> '%s tidak valid.',
					   'is_unique'  => '%s sudah terdaftar, ganti email lain.'));

		$valid->set_rules('password', 'Password', 'required',
				array('required ' => '%s harus diisi'));

		$valid->set_rules('telp', 'Nomor telphon', 'required|is_unique[user.telp]', 
				array('required' => '%s harus diisi.',
					  'is_unique'  => '%s sudah terdaftar, inputkan no nomor telepon lain.',));

		$valid->set_rules('nama_rumah_sakit', 'Nama Rumah Sakit', 'required', 
				array('required' => '%s harus diisi.'));

		$valid->set_rules('alamat_rumah_sakit', 'Alamat Rumah Sakit', 'required', 
				array('required' => '%s harus diisi'));

		$valid->set_rules('telp_rumah_sakit', 'Telpon Rumah Sakit', 'required|is_unique[anggota_rumah_sakit.telp_rumah_sakit]', 
				array('required' => '%s harus diisi.',
				      'is_unique'  => '%s sudah terdaftar, inputkan no nomor telepon lain.',));

		$valid->set_rules('id_provinsi', 'Provinsi', 'required', 
				array('required' => '%s harus diisi.'));

		if($valid->run()) {
			$config['upload_path']   = './asset/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '2400';//dalam kb
			$config['max_width']     = '2024';
			$config['max_height']    = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('photo')){	
			// if ( ! $this->upload->do_upload('photo_rumah_sakit')) {
		//End validasi

		$data = array ('title'	       => 'Tambah Anggota',
					   'provinsi'      => $provinsi,
					   'error'         => $this->upload->display_errors(),
					   'isi'           => 'admin/user/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);

		// MASUK DATABASE
		}else{
			$upload_photo = array('upload_data' => $this->upload->data());
			$upload_photo2 = array('upload_data2' => $this->upload->data());

			//create thumbnail photo
			$config['image_library']   = 'gd2';
			$config['source_image']    = './asset/upload/image/'.$upload_photo['upload_data']['file_name'];
			$config['source_image']    = './asset/upload/image/'.$upload_photo2['upload_data2']['file_name'];
			
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
			  	  'id_user'        => $i->post('id_user'),
			  	  'id_rumah_sakit' => $i->post('id_rumah_sakit'),
			      'nama_lengkap'   => $i->post('nama_lengkap'),
			      'email'		   => $i->post('email'),
			      'password'	   => MD5($i->post('password')),
			      'telp'		   => $i->post('telp'),
			      'level'		   => $i->post('level'),
			      'id_provinsi'    => $i->post('id_provinsi'),
			      // nama file photo
			      'photo'	       => $upload_photo['upload_data']['file_name'],
			      );
			$data2 = array(			      
			      'id_rumah_sakit'	    => $i->post('id_rumah_sakit'),
			      'nama_rumah_sakit'    => $i->post('nama_rumah_sakit'),
			      'alamat_rumah_sakit'	=> $i->post('alamat_rumah_sakit'),
			      'telp_rumah_sakit'	=> $i->post('telp_rumah_sakit'),
			      'photo_rumah_sakit'	=> $upload_photo2['upload_data2']['file_name'],
			      'status_buka'         => $i->post('status_buka'),
			      );
			$tambah_anggota_rumah_sakit=$this->user_model->tambah_anggota_rumah_sakit($data2);
			if ($tambah_anggota_rumah_sakit) {
				$data['id_rumah_sakit'] = $this->db->insert_id();
				$tambah_user= $this->user_model->tambah_user($data);
				$this->session->set_flashdata('sukses','Data berhasil ditambahkan.');
		        redirect(base_url('admin/user'),'refresh');
			}
		}}
		// END MASUK DATABASE
		$data = array ('title'	  => 'Tambah Anggota',
					   'provinsi' => $provinsi,
					   'isi'	  => 'admin/user/tambah'
					  );
		$this->load->view('admin/layout/wrapper', $data);
	}

	//EDIT user
	public function edit($id_rumah_sakit)
	{
		//Ambil data rovinsi
		$provinsi = $this->provinsi_model->listing();

		//Ambil data user yang akan diedit
		$user   = $this->user_model->detail($id_rumah_sakit);

		$anggota_rumah_sakit   = $this->user_model->detail2($id_rumah_sakit);
		//VALIDASI edit
		$valid = $this->form_validation;

		$valid->set_rules('nama_lengkap', 'Nama User', 'required|max_length[15]',
				array('required' => '%s harus diisi.',
					  'max_length' => 'Maksimal nama user 15 karakter.'));

		$valid->set_rules('email', 'Email', 'required|valid_email',
				array('required' 	=> '%s harus diisi.',
					  'valid_email'	=> '%s tidak valid.',
					   ));

		$valid->set_rules('telp', 'Nomor telphon', 'required', 
				array('required' => '%s harus diisi.',
					  ));

		$valid->set_rules('nama_rumah_sakit', 'Nama Rumah Sakit', 'required', 
				array('required' => '%s harus diisi.'));

		$valid->set_rules('alamat_rumah_sakit', 'Alamat Rumah Sakit', 'required', 
				array('required' => '%s harus diisi'));

		$valid->set_rules('telp_rumah_sakit', 'Telpon Rumah Sakit', 'required', 
				array('required' => '%s harus diisi.',
				      ));

		$valid->set_rules('id_provinsi', 'Provinsi', 'required', 
				array('required' => '%s harus diisi.'));

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
					   'user'	  => $user,
					   'provinsi' => $provinsi,
					   'anggota_rumah_sakit' => $anggota_rumah_sakit,
					   'error'    => $this->upload->display_errors(),
					   'isi'	  => 'admin/user/edit'
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
			$data1 = array(
			  'id_user'       => $id_user,
			  'id_rumah_sakit'=> $id_rumah_sakit,
			  'nama_lengkap'  => $i->post('nama_lengkap'),
		      'email'		  => $i->post('email'),
		      'telp'		  => $i->post('telp'),
		      'id_provinsi'	  => $i->post('id_provinsi'),
		      //Disimpan nama file photo
		      'photo'		  => $upload_photo['upload_data']['file_name']
			      );

			$data2 = array(
			  'id_rumah_sakit'	    => $id_rumah_sakit,
		      'nama_rumah_sakit'    => $i->post('nama_rumah_sakit'),
		      'alamat_rumah_sakit'	=> $i->post('alamat_rumah_sakit'),
		      'telp_rumah_sakit'	=> $i->post('telp_rumah_sakit'),
		      'photo_rumah_sakit'	=> $upload_photo['upload_data']['file_name'],
		      'status_buka'         => $i->post('status_buka'),
		      // 'id_provinsi'         => $i->post('id_provinsi'),
		      //Disimpan nama file photo
			      );
			$edit_user=$this->user_model->edit_user($data1,$id_user);
			if ($edit_user) {
				// $data2['id_user'] = $this->db->insert_id();
				$edit_anggota_rumah_sakit= $this->user_model->edit_anggota_rumah_sakit($data2,$id_user);
			}
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('admin/user'),'refresh');
		}} else {
			//Edit user tanpa ganti photo
			$i = $this->input;
			$data1 = array(
			  'id_rumah_sakit'  => $id_rumah_sakit,
			  'nama_lengkap'    => $i->post('nama_lengkap'), 
			  'email'			=> $i->post('email'),
			  'telp'			=> $i->post('telp'),
			  'id_provinsi'		=> $i->post('id_provinsi'),
		      //Disimpan nama file photo
			      );

			$data2 = array(
			  'id_rumah_sakit'	    => $id_rumah_sakit,
		      'nama_rumah_sakit'    => $i->post('nama_rumah_sakit'),
		      'alamat_rumah_sakit'	=> $i->post('alamat_rumah_sakit'),
		      'telp_rumah_sakit'	=> $i->post('telp_rumah_sakit'),
		      // 'photo_rumah_sakit'	=> $upload_photo['upload_data']['file_name'],
		      'status_buka'         => $i->post('status_buka'),
		      // 'id_provinsi'         => $i->post('id_provinsi'),
		      //Disimpan nama file photo
			      );
			
			$edit_user=$this->user_model->edit_user($data1,$id_rumah_sakit);
			
			if ($edit_user) {
				// $data2['id_rumah_sakit'] = $this->db->insert_id();
				$edit_anggota_rumah_sakit= $this->user_model->edit_anggota_rumah_sakit($data2,$id_rumah_sakit);
			}
			$this->session->set_flashdata('sukses','Data berhasil diedit.');
			redirect(base_url('admin/user'),'refresh');
		}}
		// END MASUK DATABASE
		$data = array ('title'	    => 'Edit Anggota',
					   'user'       => $user,
					   'provinsi'	=> $provinsi,
					   'anggota_rumah_sakit'	=> $anggota_rumah_sakit,
					   'isi'	    => 'admin/user/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data);
		// END MASUK DATABASE
	}

		//DELETE user
		public function delete($id_rumah_sakit)
		{
			//Proses hapus gambar
			$user = $this->user_model->detail($id_rumah_sakit);
			unlink('./asset/upload/image/'.$user->photo);
			unlink('./asset/upload/image/thumbs/'.$user->photo);
			//End proses hapus
			$data = array('id_rumah_sakit' => $id_rumah_sakit);
			$this->user_model->delete($data);
			$this->user_model->delete_anggota($data);
			$this->session->set_flashdata('sukses','Data berhasil dihapus.');
			redirect(base_url('admin/user'),'refresh');
		} 

}

?>