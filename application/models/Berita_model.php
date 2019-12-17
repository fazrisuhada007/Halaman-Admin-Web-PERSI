<?php

class Berita_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//LISTING ALL berita
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->order_by('id_berita');
		$query = $this->db->get();
		return $query->result();
	}

	//TAMBAH DATA berita
	public function tambah($data)
		{
			$this->db->insert('berita', $data);
		}

	//HAPUS DATA PADA TABEL berita
	public function delete($data)
	{
		$this->db->where('id_berita', $data['id_berita']);
		$this->db->delete('berita', $data);
	}

	//MENAMPILKAN DATA berita SEBELUM DIEDIT
	public function detail($id_berita)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('id_berita', $id_berita);
		$this->db->order_by('id_berita', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL berita
	public function edit($data)
	{
		$this->db->where('id_berita', $data['id_berita']);
		$this->db->update('berita', $data);
	}
}

?>