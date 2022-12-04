<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class HasilController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('HasilModel');
  }

  public function index()
  {
    $data['session'] = $this->db->get_where('hars_pasien', ['pasien_nama' => $this->session->userdata('pasien_id')])->row_array();
        $id = $this->session->userdata('pasien_nama');
        $id = $this->session->userdata('pasien_nama');
        $data['ambil_nilai'] = $this->db->get_where('hars_nilai', ['nilai_total' => $this->session->userdata('nilai_id')])->row_array();
        $ciri = $this->session->userdata('nilai_total');
        $data['data'] = $this->HasilModel->lihat_satu_pasien($id);
        $data['nilai'] = $this->HasilModel->lihat_satu_nilai($ciri);
    $data['title'] = 'Hasil Tes Kecemasan';
    // $data['hasil'] = $this->HasilModel->getHasil();
    $this->load->view('templates/header_tes', $data);
    $this->load->view('/frontend/hasil/index', $data);
    $this->load->view('templates/footer');
  }
}
?>