<?php

class Provinsi_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//LISTING ALL USER
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('provinsi');
		$this->db->order_by('id_provinsi');
		$query = $this->db->get();
		return $query->result();
	}

	//TAMBAH DATA KATEGORI
	public function tambah($data)
		{
			$this->db->insert('provinsi', $data);
		}

	//HAPUS DATA PADA TABEL KATEGORI
	public function delete($data)
	{
		$this->db->where('id_provinsi', $data['id_provinsi']);
		$this->db->delete('provinsi', $data);
	}

	//MENAMPILKAN DATA KATEGORI SEBELUM DIEDIT
	public function detail($id_provinsi)
	{
		$this->db->select('*');
		$this->db->from('provinsi');
		$this->db->where('id_provinsi', $id_provinsi);
		$this->db->order_by('id_provinsi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL KATEGORI
	public function edit($data)
	{
		$this->db->where('id_provinsi', $data['id_provinsi']);
		$this->db->update('provinsi', $data);
	}
}

?>