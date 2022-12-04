<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class QsatuController extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $model = array('QsatuModel','PasienModel');
    $helper = array('tgl_indo_helper');
    $this->load->model($model);
    $this->load->helper($helper);
  }

  public function index()
  {
        $data['session'] = $this->db->get_where('hars_pasien', ['pasien_nama' => $this->session->userdata('pasien_id')])->row_array();
        $id = $this->session->userdata('pasien_nama');
        $data['data'] = $this->QsatuModel->lihat_satu_pasien($id);
        $data['title'] = '1. Perasaan Cemas';
    
    $this->load->view('templates/header_tes',$data);
    $this->load->view('frontend/q1/index',$data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    if (isset($_POST['simpan'])){
			$generate = substr(time(), 5);
			$id = 'NIL-' . $generate;
			$nama = $this->input->post('nama');
			$item_satu = $this->input->post('item_satu');
			$data = array(
				'nilai_id' => $id,
				'nilai_pasien_id' => $nama,
				'nilai_item_satu' => $item_satu,
				// 'nilai_item_dua' => 0,
				// 'nilai_item_tiga' => 0,
				// 'nilai_item_empat' => 0,
				// 'nilai_item_lima' => 0,
        // 'nilai_item_enam' => 0,
        // 'nilai_item_tujuh' => 0,
        // 'nilai_item_delapan' => 0,
        // 'nilai_item_sembilan' => 0,
        // 'nilai_item_sepuluh' => 0,
        // 'nilai_item_sebelas' => 0,
        // 'nilai_item_duabelas' => 0,
        // 'nilai_item_tigabelas' => 0,
        // 'nilai_item_empatbelas' => 0,
        'nilai_total' => $item_satu
			);
			$save = $this->QsatuModel->tambah_qsatu($data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'login_sukses');
				$this->session->set_userdata($data);
				redirect('q2');
			}
			else{
				redirect('q1');
			}
		}
  }
}

?>