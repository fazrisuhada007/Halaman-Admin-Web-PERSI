<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		//Login User
		public function login($email,$password)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where(array('email' => $email,
								   'password' => MD5($password)));
			$this->db->order_by('id_user', 'desc');
			$query = $this->db->get();
			return $query->row();
		}	

		// join tabel user dengan provinsi
		public function listing()
		{
			$this->db->select('user.* ,provinsi.nama_provinsi, anggota_rumah_sakit.nama_rumah_sakit, anggota_rumah_sakit.alamat_rumah_sakit');

			$this->db->from('user');
			//Join
			$this->db->join('provinsi', 'provinsi.id_provinsi = user.id_provinsi', 'left');
			//Join
			$this->db->join('anggota_rumah_sakit', 'anggota_rumah_sakit.id_rumah_sakit = user.id_rumah_sakit', 'left');
			//End join
			$this->db->order_by('id_provinsi', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		//Menampilkan detail user
		public function detail($id_rumah_sakit)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('id_rumah_sakit', $id_rumah_sakit);
			$this->db->order_by('id_rumah_sakit', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		//Menampilkan detail rumah sakit
		public function detail2($id_rumah_sakit)
		{
			$this->db->select('*');
			$this->db->from('anggota_rumah_sakit');
			$this->db->where('id_rumah_sakit', $id_rumah_sakit);
			$this->db->order_by('id_rumah_sakit', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		// TAMBAH user
		public function tambah_user($data)
		{
			$this->db->insert('user', $data);
			return true;
		}
		public function tambah_anggota_rumah_sakit($data)
		{
			
			$this->db->insert('anggota_rumah_sakit', $data);
			return true;
		}

		// PERINTAH EDIT DATA user
		public function edit_user($data,$id_rumah_sakit)
		{
			$this->db->where('id_rumah_sakit', $id_rumah_sakit);
			return $this->db->update('user', $data);
		
		}
		public function edit_anggota_rumah_sakit($data,$id_rumah_sakit)
		{
			$this->db->where('id_rumah_sakit', $id_rumah_sakit);
			return $this->db->update('anggota_rumah_sakit', $data);
			
			
		}

		//HAPUS user
		public function delete($data)
		{
			return $this->db->delete('user', $data);
		}
		//HAPUS anggota
		public function delete_anggota($data)
		{
	
			return $this->db->delete('anggota_rumah_sakit', $data);
		}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */