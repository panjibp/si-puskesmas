<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Keluhan_model extends CI_Model
{

	public function daftarKeluhan()
	{
		$this->db->select('*');
		$this->db->from('keluhan');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapusKeluhan($data)
	{
		$tables = array('keluhan');
		$this->db->where('id', $data);
		$this->db->delete($tables);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editKeluhan($id)
	{
		$this->db->select('*');
		$this->db->from('keluhan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function prosesEditKeluhan($id, $data)
	{
		$this->db->update('keluhan', $data, 'id =' . $id);
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
			return false;
		}
	}
	
}