<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Komentar_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		// // join tabel komentar dengan kompartemen
		public function listing($id)
		{
			$this->db->select('komentar.*, anggota_rumah_sakit.nama_rumah_sakit');

			$this->db->from('komentar');

			//Join
			$this->db->join('anggota_rumah_sakit', 'anggota_rumah_sakit.id_rumah_sakit = komentar.id_rumah_sakit', 'left');
			$this->db->where('id_forum', $id);
			//End join
			$this->db->order_by('id_rumah_sakit', 'desc');
			$query = $this->db->get();
			return $query->result();
		}

		//Menampilkan detail komentar
		public function detail($id_komentar)
		{
			$this->db->select('*');
			$this->db->from('komentar');
			$this->db->where('id_komentar', $id_komentar);
			$this->db->order_by('id_komentar', 'desc');
			$query = $this->db->get();
			return $query->row();
		}

		//HAPUS
		public function delete($data)
		{
			$this->db->where('id_komentar', $data['id_komentar']);
			$this->db->delete('komentar', $data);
		}
}

/* End of file Komentar_model.php */
/* Location: ./application/models/Komentar_model.php */