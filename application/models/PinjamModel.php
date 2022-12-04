<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PinjamModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_pinjaman(){
		$this->db->select('*');
		$this->db->from('hars_pinjam');
		$this->db->join('hars_pasien', 'hars_pasien.pasien_id = hars_pinjam.pinjam_pasien_id');
		$this->db->order_by('pasien_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_pinjaman($data){
		$this->db->insert('hars_pinjam', $data);
		return $this->db->affected_rows();
	}

	public function update_pinjaman($id,$data){
		$this->db->where('pinjam_id', $id);
		$this->db->update('hars_pinjam', $data);
		return $this->db->affected_rows();
	}

}
