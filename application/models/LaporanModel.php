<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_laporan($tanggal){
		$this->db->select('*');
		$this->db->from('hars_gaji');
		$this->db->join('hars_pasien', 'hars_pasien.pasien_id = hars_gaji.gaji_pasien_id');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
		$this->db->like('gaji_tanggal',$tanggal);
		$this->db->where('gaji_status','sudah');
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
}
