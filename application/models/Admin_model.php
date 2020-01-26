<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		//Login Admin
		public function login($email,$password)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where(array('email' => $email,
								   'password' => MD5($password)));
			$this->db->order_by('id_admin', 'desc');
			$query = $this->db->get();
			return $query->row();
		}	

		

		//Menampilkan detail admin
		public function detail($id_admin)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('id_admin', $id_admin);
			$this->db->order_by('id_admin', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		
		

		// PERINTAH EDIT DATA admin
		public function edit_admin($data,$id_rumah_sakit)
		{
			$this->db->where('id_rumah_sakit', $id_rumah_sakit);
			return $this->db->update('admin', $data);
		
		}
		public function edit_anggota_rumah_sakit($data,$id_rumah_sakit)
		{
			$this->db->where('id_rumah_sakit', $id_rumah_sakit);
			return $this->db->update('anggota_rumah_sakit', $data);
			
			
		}

		//HAPUS admin
		public function delete($data)
		{
			return $this->db->delete('admin', $data);
		}
		//HAPUS anggota
		public function delete_anggota($data)
		{
	
			return $this->db->delete('anggota_rumah_sakit', $data);
		}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */