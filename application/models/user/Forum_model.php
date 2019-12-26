<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Forum_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		// join tabel forum dengan kompartemen
		public function listing()
		{
			$this->db->select('forum.*, 
						   anggota_rumah_sakit.nama_rumah_sakit,
						   kompartemen.nama_kompartemen');
			$this->db->from('forum');
			//Join
			$this->db->join('kompartemen', 'kompartemen.id_kompartemen = forum.id_kompartemen', 'left');
			//Join
			$this->db->join('anggota_rumah_sakit', 'anggota_rumah_sakit.id_rumah_sakit = forum.id_rumah_sakit', 'left');
			//End join
			$this->db->order_by('id_kompartemen', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		//Menampilkan detail forum
		public function detail($id_forum)
		{
			$this->db->select('*');
			$this->db->from('forum');
			$this->db->where('id_forum', $id_forum);
			$this->db->order_by('id_forum', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		// TAMBAH forum
		public function tambah($data)
		{
			$this->db->insert('forum', $data);
		}

		// PERINTAH EDIT DATA
		public function edit($data)
		{
			$this->db->where('id_forum', $data['id_forum']);
			$this->db->update('forum', $data);
		}

		//HAPUS
		public function delete($data)
		{
			$this->db->where('id_forum', $data['id_forum']);
			$this->db->delete('forum', $data);
		}
}

/* End of file Forum_model.php */
/* Location: ./application/models/Forum_model.php */