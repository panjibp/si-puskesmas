<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard_model extends CI_Model
{

	public function jmlPengguna()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('user');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jmlDataPasien()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('pasien');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jmlDataKeluhan()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('keluhan');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

}