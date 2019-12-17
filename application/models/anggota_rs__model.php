<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Anggota_rs_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		// join tabel anggota_rs dengan provinsi
		public function listing()
		{
			$this->db->select('anggota_rs.*,  
						   provinsi.nama_provinsi');
			$this->db->from('anggota_rs');
			//Join
			$this->db->join('provinsi', 'provinsi.id_provinsi = anggota_rs.id_provinsi', 'left');
			//End join
			$this->db->order_by('id_provinsi', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		//Menampilkan detail anggota_rs
		public function detail($id_anggota_rs)
		{
			$this->db->select('*');
			$this->db->from('anggota_rs');
			$this->db->where('id_anggota_rs', $id_anggota_rs);
			$this->db->order_by('id_anggota_rs', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		//Login Anggota_rs
		public function login($email,$password)
		{
			$this->db->select('*');
			$this->db->from('anggota_rs');
			$this->db->where(array('email' => $email,
								   'password' => MD5($password)));
			$this->db->order_by('id_anggota_rs', 'desc');
			$query = $this->db->get();
			return $query->row();
		}	

		// TAMBAH
		public function tambah($data)
		{
			$this->db->insert('anggota_rs', $data);
		}

		// PERINTAH EDIT DATA
		public function edit($data)
		{
			$this->db->where('id_anggota_rs', $data['id_anggota_rs']);
			$this->db->update('anggota_rs', $data);
		}

		//HAPUS
		public function delete($data)
		{
			$this->db->where('id_anggota_rs', $data['id_anggota_rs']);
			$this->db->delete('anggota_rs', $data);
		}


}

/* End of file Anggota_rs_model.php */
/* Location: ./application/models/Anggota_rs_model.php */