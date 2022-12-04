<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PasienController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
		$model = array('JabatanModel','PasienModel');
		$helper = array('tgl_indo_helper');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function index(){
    	$data = array(
    		'pasien' => $this->PasienModel->lihat_pasien(),
			'jabatan' => $this->JabatanModel->lihat_jabatan(),
			'title' => 'pasien'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/pasien/index',$data);
		$this->load->view('templates/footer');
	}

	public function lihat($id){
		$data = $this->PasienModel->lihat_satu_pasien($id);
		echo json_encode($data);
	}

	public function update(){
		if (isset($_POST['update'])){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$tempatLahir = $this->input->post('tempat_lahir');
			$tanggalLahir = $this->input->post('tanggal_lahir');
			$alamat = $this->input->post('alamat');
			$tanggalPemeriksaan = $this->input->post('tanggal_pemeriksaan');
			$gajiId = $this->input->post('jabatan');
			$nomorHp = $this->input->post('nomor_hp');
			$nomorRek = $this->input->post('nomor_rekening');
			$data = array(
				'pasien_nama' => $nama,
				'pasien_tempat_lahir' => $tempatLahir,
				'pasien_tanggal_lahir' => $tanggalLahir,
				'pasien_alamat' => $alamat,
				'pasien_tanggal_pemeriksaan' => $tanggalPemeriksaan,
				'pasien_nomor_hp' => $nomorHp,
				'pasien_no_rekening' => $nomorRek,
				'pasien_jabatan_id' => $gajiId
			);
			$save = $this->PasienModel->update_pasien($id,$data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'update_pasien');
				redirect('pasien');
			}
			else{
				redirect('pasien');
			}
		}
	}

	public function hapus($id){
		$hapus = $this->PasienModel->hapus_pasien($id);
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'hapus_pasien');
			redirect('pasien');
		}else{
			redirect('pasien');
		}
	}

	public function ajaxIndex(){
		echo json_encode($this->PasienModel->lihat_pasien());
	}

}
