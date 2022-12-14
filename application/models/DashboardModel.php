<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function jumlah_pasien(){
		$this->db->from('hars_pasien');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function jumlah_pinjaman(){
		$this->db->from('hars_pinjam');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function jumlah_absen(){
		$this->db->from('hars_absen');
		$this->db->like('absen_date_created',date('Y-m-d'));
		$query = $this->db->get();
		return $query->num_rows();
	}
}
