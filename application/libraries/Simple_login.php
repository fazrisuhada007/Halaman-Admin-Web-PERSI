<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        //Load data model user
        $this->CI->load->model('admin_model');
	}

	//Fungsi Login
	public function login($email,$password)
	{
		$check = $this->CI->admin_model->login($email,$password);
		//Jika ada data user, maka create session login
		if($check) {
			$id_admin 	    = $check->id_admin;
			$nama       	= $check->nama;
			$username	    = $check->username;
			$telp           = $check->telp;
			$email		    = $check->email;
			$alamat		    = $check->alamat;
			$status		    = $check->status;
			$photo		    = $check->photo;
			//Craete session
			$this->CI->session->set_userdata('id_admin', $id_admin);
			$this->CI->session->set_userdata('nama', $nama);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('telp', $telp);
			$this->CI->session->set_userdata('email', $email);
			$this->CI->session->set_userdata('alamat', $alamat);
			$this->CI->session->set_userdata('status', $status);
			$this->CI->session->set_userdata('photo', $photo);
			//redirect ke halaman admin yang telah diproteksi
			redirect(base_url('admin/dashboard'),'refresh');
		} else {
			//Jika data tidak ditemukan(email atau password salah), maka login kembali!
			$this->CI->session->set_flashdata('warning', 'email atau password salah.');
			redirect(base_url('login'), 'refresh');
		}
	}

	//Fungsi cek login
	public function cek_login()
	//Memeriksa apakah session sudah ada atau belum, jika belum alihkan ke halaman login
	{
		if($this->CI->session->userdata('email') == "") {
		   $this->CI->session->set_flashdata('warning','Anda belum login');
			   redirect(base_url('login'),'refresh');
			}
	}

	//Fungsi logout
	public function logout()
	{
		//MEMBUANG SEMUA SESSION YANG TELAH DI SET SAAT LOGIN
		$this->CI->session->unset_userdata('id_admin');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('telp');
		$this->CI->session->unset_userdata('email');
		$this->CI->session->unset_userdata('alamat');
		$this->CI->session->unset_userdata('status');
		$this->CI->session->unset_userdata('photo');
		//SETELAH SESSION DIBUANG DI REDIRECT KE HALAMAN LOGIN
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout.');
		redirect(base_url('login'),'refresh');
	}
	

}

/* End of file Login.php */
/* Location: ./application/libraries/Login.php */
