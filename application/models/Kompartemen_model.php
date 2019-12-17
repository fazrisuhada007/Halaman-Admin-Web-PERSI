<?php

class Kompartemen_model extends CI_Model
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
		$this->db->from('kompartemen');
		$this->db->order_by('id_kompartemen');
		$query = $this->db->get();
		return $query->result();
	}

	//TAMBAH DATA Pelayanan medis
	public function tambah($data)
		{
			$this->db->insert('kompartemen', $data);
		}

	//HAPUS DATA PADA TABEL Pelayanan medis
	public function delete($data)
	{
		$this->db->where('id_kompartemen', $data['id_kompartemen']);
		$this->db->delete('kompartemen', $data);
	}

	//MENAMPILKAN DATA Pelayanan medis SEBELUM DIEDIT
	public function detail($id_kompartemen)
	{
		$this->db->select('*');
		$this->db->from('kompartemen');
		$this->db->where('id_kompartemen', $id_kompartemen);
		$this->db->order_by('id_kompartemen', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL Pelayanan medis
	public function edit($data)
	{
		$this->db->where('id_kompartemen', $data['id_kompartemen']);
		$this->db->update('kompartemen', $data);
	}
}

?>