<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->model(array('bahan_model'));
    	$this->load->helper(array('url_helper', 'form', 'url'));
		$this->load->library(array('form_validation'));
  	}

	public function index()
	{
		$data=array(
			'konten'=>'bahan',
			'halaman' => 'Bahan',
			'judul' => 'Palangki',
			'judul_box' => 'Daftar Bahan',
			'bahan' => $this->bahan_model->get_bahan()
		);

		$this->load->view('templates/admin', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama','Nama Bahan', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah Bahan', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga Bahan', 'required|trim');
		
		if($this->form_validation->run()==FALSE){
			$data=array(
				'konten'=>'bahan_tambah',
				'halaman' => 'Bahan',
				'judul' => 'Palangki',
				'judul_box' => 'Tambah Bahan',
				'bahan' => $this->bahan_model->get_bahan()
			);

			$this->load->view('templates/admin', $data);
		}else{
			$this->bahan_model->set_bahan();
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('bahan');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Bahan', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah Bahan', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga Bahan', 'required|trim');

		if($this->form_validation->run()==FALSE){
			$data=array(
				'konten'=>'bahan_update',
				'halaman' => 'Bahan',
				'judul' => 'Palangki',
				'judul_box' => 'Edit Bahan',
				'bahan_item' => $this->bahan_model->get_bahan_id($id)
			);

			$this->load->view('templates/admin', $data);
		}else{
			$this->bahan_model->update_bahan();
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('bahan');
		}
	}

	public function delete($id)
	{
		$this->bahan_model->delete_bahan($id);
		redirect('bahan');
	}
	public function cetak()
	{
		$data = [
            'title' => 'Laporan Data Bahan',
            'data' => $this->db->get('bahan')->result()
        ];
        $this->template->laporan('laporan/lap_bahan', $data);
	}
}