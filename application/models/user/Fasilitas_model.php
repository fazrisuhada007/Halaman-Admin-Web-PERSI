<?php

class Fasilitas_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	//Menampilkan detail user
	public function detail($id_rumah_sakit)
	{
		$this->db->select('*');
		$this->db->from('tbl_anggota_rs');
		$this->db->where('id_rumah_sakit', $id_rumah_sakit);
		$this->db->order_by('id_rumah_sakit', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//LISTING ALL Pelayanan medis
	public function listing()
	{
		$this->db->select('tbl_anggota_rs.* ,anggota_rumah_sakit.nama_rumah_sakit');

		$this->db->from('tbl_anggota_rs');
		//Join
		$this->db->join('anggota_rumah_sakit', 'anggota_rumah_sakit.id_rumah_sakit = tbl_anggota_rs.id_rumah_sakit', 'left');
		//End join
		$this->db->order_by('id_rumah_sakit', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	//TAMBAH DATA Pelayanan medis
	public function tambah($data)
		{
			$this->db->insert('tbl_anggota_rs', $data);
		}

	//HAPUS DATA PADA TABEL Pelayanan medis
	public function delete($data)
	{
		$this->db->where('id_anggota_rumah_sakit', $data['id_anggota_rumah_sakit']);
		$this->db->delete('tbl_anggota_rs', $data);
	}

}

?>