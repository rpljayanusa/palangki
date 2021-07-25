<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->model(array('pemesanan_model'));
    	$this->load->helper(array('url_helper', 'form', 'url'));
		$this->load->library(array('form_validation'));

		if ($this->session->userdata('jenis_pengguna') != 'admin'){
			redirect('home');
		}
  	}

	public function index()
	{
		$data=array(
			'konten'=>'pemesanan',
			'halaman' => 'Pemesanan',
			'judul' => 'Palangki',
			'judul_box' => 'Daftar Pemesanan',
			'pemesanan' => $this->pemesanan_model->get_pemesanan()
		);

		$this->load->view('templates/admin', $data);
	}

	public function delete($id)
	{
		$pesanan = $this->pemesanan_model->get_pemesanan_id($id);
		$nama = './assets/pesan/'.$pesanan->gambar;
		if(is_readable($nama) && unlink($nama)){
			$this->pemesanan_model->tambah_stok_produk($id);
			$this->pemesanan_model->delete_pemesanan($id);
			redirect('pemesanan');
		}
		else{
			$this->pemesanan_model->tambah_stok_produk($id);
			$this->pemesanan_model->delete_pemesanan($id);
			redirect('pemesanan');
		}
		
	}

}