<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class QempatbelasModel extends CI_Model{

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

    public function lihat_satu_nilai($id)
    {
        $this->db->select('*');
        $this->db->from('hars_nilai');
        $this->db->join('hars_pasien', 'hars_pasien.pasien_id = hars_nilai.nilai_pasien_id');
        $this->db->where(['nilai_total' => $id]);
        return $this->db->get()->row_array();
    }

    public function update_qempatbelas($id,$data)
    {
        $this->db->where('nilai_id',$id);
        $this->db->update('hars_nilai',$data);
        return $this->db->affected_rows();
    }
}

?>