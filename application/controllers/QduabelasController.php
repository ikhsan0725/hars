<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class QduabelasController extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $model = array('QduabelasModel','PasienModel');
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
        $data['data'] = $this->QduabelasModel->lihat_satu_pasien($id);
        $data['nilai'] = $this->QduabelasModel->lihat_satu_nilai($ciri);
        $data['title'] = '12. Gejala <i>Urogenital</i>';
    
    $this->load->view('templates/header_tes',$data);
    $this->load->view('frontend/q12/index',$data);
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
      $item_sebelas = $this->input->post('item_sebelas');
      $item_duabelas = $this->input->post('item_duabelas');
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
        'nilai_item_sebelas' => $item_sebelas,
        'nilai_item_duabelas' => $item_duabelas,
        'nilai_total' => $item_satu + $item_dua + $item_tiga + $item_empat + $item_lima + $item_enam + $item_tujuh + $item_delapan + $item_sembilan + $item_sepuluh + $item_sebelas + $item_duabelas
      );
      $save = $this->QduabelasModel->update_qduabelas($id,$data);
      if ($save>0){
        $this->session->set_flashdata('alert', 'update_pasien');
        $this->session->set_userdata($data);
        redirect('q13');
      }
      else{
        redirect('q12');
      }
    }
  }
}

?>