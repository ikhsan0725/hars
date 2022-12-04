<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TesController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $helper = array('tgl_indo_helper');
    $model = array('TesModel', 'PasienModel');
    $this->load->model($model);
		$this->load->helper($helper);  
  }

	public function index()
	{
    $data = array(
      'title' => 'Tes'
    );
    $this->load->view('templates/header_tes', $data);
		$this->load->view('frontend/tes/index', $data);
    $this->load->view('templates/footer');
    }

  public function tambah()
  {
    if (isset($_POST['simpan'])){
			$generate = substr(time(), 5);
			$id = 'PAS-' . $generate;
			$nama = $this->input->post('nama');
			$tempatLahir = $this->input->post('tempat_lahir');
			$tanggalLahir = $this->input->post('tanggal_lahir');
			$alamat = $this->input->post('alamat');
			// $tanggalPemeriksaan = $this->input->post('tanggal_pemeriksaan');
			$nomorHp = $this->input->post('nomor_hp');
			$data = array(
				'pasien_id' => $id,
				'pasien_jabatan_id' => 'JAB-74569',
				'pasien_nama' => $nama,
				'pasien_tempat_lahir' => $tempatLahir,
				'pasien_tanggal_lahir' => $tanggalLahir,
				'pasien_alamat' => $alamat,
				// 'pasien_tanggal_pemeriksaan' => $tanggalPemeriksaan,
				'pasien_nomor_hp' => $nomorHp
			);
			$save = $this->TesModel->tambah_tes($data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'login_sukses');
				$this->session->set_userdata($data);
				redirect('data');
			}
			else{
				redirect('tes');
			}
		}
  }

	public function lihat($id)
	{
		
		$data = $this->TesModel->lihat_satu_pasien($id);
		echo json_encode($data);
	}
}
