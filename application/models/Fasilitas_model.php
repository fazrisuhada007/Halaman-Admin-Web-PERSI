<?php

class Fasilitas_model extends CI_Model
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
		$this->db->from('fasilitas');
		$this->db->order_by('id_fasilitas');
		$query = $this->db->get();
		return $query->result();
	}

	//TAMBAH DATA Pelayanan medis
	public function tambah($data)
		{
			$this->db->insert('fasilitas', $data);
		}

	//HAPUS DATA PADA TABEL Pelayanan medis
	public function delete($data)
	{
		$this->db->where('id_fasilitas', $data['id_fasilitas']);
		$this->db->delete('fasilitas', $data);
	}

	//MENAMPILKAN DATA Pelayanan medis SEBELUM DIEDIT
	public function detail($id_fasilitas)
	{
		$this->db->select('*');
		$this->db->from('fasilitas');
		$this->db->where('id_fasilitas', $id_fasilitas);
		$this->db->order_by('id_fasilitas', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL Pelayanan medis
	public function edit($data)
	{
		$this->db->where('id_fasilitas', $data['id_fasilitas']);
		$this->db->update('fasilitas', $data);
	}
}

?>