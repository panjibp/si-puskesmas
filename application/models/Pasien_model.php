<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Pasien_model extends CI_Model
{

	public function daftarPasien()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->order_by('nama' ,'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapusPasien($data)
	{
		$tables = array('pasien');
		$this->db->where('id', $data);
		$this->db->delete($tables);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editPasien($id)
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function prosesEditPasien($id, $data)
	{
		$this->db->update('pasien', $data, 'id =' . $id);
		if ($this->db->affected_rows() == '1') {
			return true;
		} else {
			return false;
		}
	}

}