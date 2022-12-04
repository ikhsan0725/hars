<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class QsepuluhController extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $model = array('QsepuluhModel','PasienModel');
    $helper = array('tgl_indo_helper');
    $this->load->model($model);
    $this->load->helper($helper);
  }

  public function index()
  {
        $data['session'] = $this->db->get_where('hars_pasien', ['pasien_nama' => $this->session->userdata('pasien_id')])->row_array();
        $id = $this->session->userdata('pasien_nama');
        $data['ambil_nilai'] = $this->db->get_where('hars_nilai', ['nilai_total' => $this->session->userdata('nilai_id')])->row_array();
        $ciri = $this->session->userdata('nilai_total');
        $data['data'] = $this->QsepuluhModel->lihat_satu_pasien($id);
        $data['nilai'] = $this->QsepuluhModel->lihat_satu_nilai($ciri);
        $data['title'] = '10. Gejala Pernapasan';
    
    $this->load->view('templates/header_tes',$data);
    $this->load->view('frontend/q10/index',$data);
    $this->load->view('templates/footer');
  }

  public function update()
  {
    if (isset($_POST['update'])){
      $id = $this->input->post('id_nilai');
      $item_satu = $this->input->post('item_satu');
      $item_dua = $this->input->post('item_dua');
      $item_tiga = $this->input->post('item_tiga');
      $item_empat = $this->input->post('item_empat');
      $item_lima = $this->input->post('item_lima');
      $item_enam = $this->input->post('item_enam');
      $item_tujuh = $this->input->post('item_tujuh');
      $item_delapan = $this->input->post('item_delapan');
      $item_sembilan = $this->input->post('item_sembilan');
      $item_sepuluh = $this->input->post('item_sepuluh');
      $data = array(
        'nilai_id' => $id,
        'nilai_item_satu' => $item_satu,
        'nilai_item_dua' => $item_dua,
        'nilai_item_tiga' => $item_tiga,
        'nilai_item_empat' => $item_empat,
        'nilai_item_lima' => $item_lima,
        'nilai_item_enam' => $item_enam,
        'nilai_item_tujuh' => $item_tujuh,
        'nilai_item_delapan' => $item_delapan,
        'nilai_item_sembilan' => $item_sembilan,
        'nilai_item_sepuluh' => $item_sepuluh,
        'nilai_total' => $item_satu + $item_dua + $item_tiga + $item_empat + $item_lima + $item_enam + $item_tujuh + $item_delapan + $item_sembilan + $item_sepuluh
      );
      $save = $this->QsepuluhModel->update_qsepuluh($id,$data);
      if ($save>0){
        $this->session->set_flashdata('alert', 'update_pasien');
        $this->session->set_userdata($data);
        redirect('q11');
      }
      else{
        redirect('q10');
      }
   }
  }
}