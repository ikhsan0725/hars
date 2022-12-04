<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class QduaController extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $model = array('QduaModel','PasienModel');
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
        $data['data'] = $this->QduaModel->lihat_satu_pasien($id);
        $data['nilai'] = $this->QduaModel->lihat_satu_nilai($ciri);
        $data['title'] = '2. Ketegangan';
    
    $this->load->view('templates/header_tes',$data);
    $this->load->view('frontend/q2/index',$data);
    $this->load->view('templates/footer');
  }

  public function update()
  {
		if (isset($_POST['update'])){
      $id = $this->input->post('id_nilai');
      $item_satu = $this->input->post('item_satu');
			$item_dua = $this->input->post('item_dua');
			$data = array(
        'nilai_id' => $id,
        'nilai_item_satu' => $item_satu,
				'nilai_item_dua' => $item_dua,
				'nilai_total' => $item_satu + $item_dua
			);
			$save = $this->QduaModel->update_qdua($id,$data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'update_pasien');
        $this->session->set_userdata($data);
				redirect('q3');
			}
			else{
				redirect('q2');
			}
		}
	}
}

?>