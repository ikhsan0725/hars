<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DataController extends CI_Controller{
  
  public function __construct()
  {
    parent::__construct();
    $model = array('DataModel','PasienModel');
    $helper = array('tgl_indo_helper');
    $this->load->model($model);
    $this->load->helper($helper);
  }

  public function index()
  {
        $data['session'] = $this->db->get_where('hars_pasien', ['pasien_nama' => $this->session->userdata('pasien_id')])->row_array();
        $id = $this->session->userdata('pasien_nama');
        $data['data'] = $this->DataModel->lihat_satu_pasien($id);
        $data['title'] = 'Data Diri Pasien';
    
    $this->load->view('templates/header_tes',$data);
    $this->load->view('frontend/data/index',$data);
    $this->load->view('templates/footer');
  }
}


?>