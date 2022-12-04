<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PasienModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_pasien(){
		$this->db->select('*');
		$this->db->from('hars_pasien');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
		$this->db->order_by('pasien_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_pasien($data){
		$this->db->insert('hars_pasien', $data);
		return $this->db->affected_rows();
	}

	public function lihat_satu_pasien($id){
		$this->db->select('*');
		$this->db->from('hars_pasien');
		$this->db->join('hars_jabatan', 'hars_jabatan.jabatan_id = hars_pasien.pasien_jabatan_id');
		$this->db->where('pasien_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_pasien($id,$data){
		$this->db->where('pasien_id',$id);
		$this->db->update('hars_pasien',$data);
		return $this->db->affected_rows();
	}

	public function hapus_pasien($id){
		$this->db->where('pasien_id', $id);
		$this->db->delete('hars_pasien');
		return $this->db->affected_rows();
	}
}
