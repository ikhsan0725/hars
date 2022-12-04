<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class QsatuModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function lihat_satu_pasien($id)
  {
    $this->db->select('*');
    $this->db->from('hars_pasien');
    $this->db->join('hars_jabatan', 'hars_pasien.pasien_jabatan_id = hars_jabatan.jabatan_id');
    $this->db->where(['pasien_nama' => $id]);
    return $this->db->get()->row_array();
  }

 public function tambah_qsatu($data)
 {
  $this->db->insert('hars_nilai', $data);
  return $this->db->affected_rows();
 }

}

?>