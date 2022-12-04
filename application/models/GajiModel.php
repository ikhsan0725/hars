<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GajiModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_gaji(){
		$this->db->select('*');
		$this->db->from('hars_pasien');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
		$this->db->order_by('pasien_nama','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_gaji_perorang($id){
		$this->db->select('*');
		$this->db->from('hars_gaji');
		$this->db->join('hars_pasien', 'hars_pasien.pasien_id = hars_gaji.gaji_pasien_id');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
		$this->db->order_by('gaji_bulan_ke','DESC');
		$this->db->order_by('pasien_nama','ASC');
		$this->db->where('gaji_pasien_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lihat_satu_gaji($id){
		$this->db->select('*');
		$this->db->from('hars_gaji');
		$this->db->join('hars_pasien', 'hars_pasien.pasien_id = hars_gaji.gaji_pasien_id');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
		$this->db->where('gaji_pasien_id',$id);
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function lihat_satu_gaji_by_id($id){
		$this->db->select('*');
		$this->db->from('hars_gaji');
		$this->db->join('hars_pasien', 'hars_pasien.pasien_id = hars_gaji.gaji_pasien_id');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
//		$this->db->join('hars_pinjam', 'hars_pinjam.pinjam_pasien_id = hars_gaji.gaji_pasien_id');
		$this->db->where('gaji_id',$id);
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function lihat_satu_gaji_pinjam($id){
		$this->db->select('*');
		$this->db->from('hars_gaji');
		$this->db->join('hars_pasien', 'hars_pasien.pasien_id = hars_gaji.gaji_pasien_id');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
		$this->db->join('hars_pinjam', 'hars_pinjam.pinjam_pasien_id = hars_gaji.gaji_pasien_id');
		$this->db->where('gaji_id',$id);
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function tambah_gaji($data){
		$this->db->insert('hars_gaji', $data);
		return $this->db->affected_rows();
	}

	public function update_gaji($id,$data){
		$this->db->where('gaji_id', $id);
		$this->db->update('hars_gaji', $data);
		return $this->db->affected_rows();
	}

}
