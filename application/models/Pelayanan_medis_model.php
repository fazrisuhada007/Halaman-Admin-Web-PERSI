<?php

class Pelayanan_medis_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//LISTING ALL Pelayanan medis
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pelayanan_medis');
		$this->db->order_by('id_pelayanan_medis');
		$query = $this->db->get();
		return $query->result();
	}

	//TAMBAH DATA Pelayanan medis
	public function tambah($data)
		{
			$this->db->insert('pelayanan_medis', $data);
		}

	//HAPUS DATA PADA TABEL Pelayanan medis
	public function delete($data)
	{
		$this->db->where('id_pelayanan_medis', $data['id_pelayanan_medis']);
		$this->db->delete('pelayanan_medis', $data);
	}

	//MENAMPILKAN DATA Pelayanan medis SEBELUM DIEDIT
	public function detail($id_pelayanan_medis)
	{
		$this->db->select('*');
		$this->db->from('pelayanan_medis');
		$this->db->where('id_pelayanan_medis', $id_pelayanan_medis);
		$this->db->order_by('id_pelayanan_medis', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL Pelayanan medis
	public function edit($data)
	{
		$this->db->where('id_pelayanan_medis', $data['id_pelayanan_medis']);
		$this->db->update('pelayanan_medis', $data);
	}
}

?>