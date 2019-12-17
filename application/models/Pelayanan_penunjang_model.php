<?php

class Pelayanan_penunjang_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//LISTING ALL Pelayanan penunjang
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pelayanan_penunjang');
		$this->db->order_by('id_pelayanan_penunjang');
		$query = $this->db->get();
		return $query->result();
	}

	//TAMBAH DATA Pelayanan penunjang
	public function tambah($data)
		{
			$this->db->insert('pelayanan_penunjang', $data);
		}

	//HAPUS DATA PADA TABEL Pelayanan penunjang
	public function delete($data)
	{
		$this->db->where('id_pelayanan_penunjang', $data['id_pelayanan_penunjang']);
		$this->db->delete('pelayanan_penunjang', $data);
	}

	//MENAMPILKAN DATA Pelayanan penunjang SEBELUM DIEDIT
	public function detail($id_pelayanan_penunjang)
	{
		$this->db->select('*');
		$this->db->from('pelayanan_penunjang');
		$this->db->where('id_pelayanan_penunjang', $id_pelayanan_penunjang);
		$this->db->order_by('id_pelayanan_penunjang', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	//EDIT DATA PADA TABEL Pelayanan penunjang
	public function edit($data)
	{
		$this->db->where('id_pelayanan_penunjang', $data['id_pelayanan_penunjang']);
		$this->db->update('pelayanan_penunjang', $data);
	}
}

?>