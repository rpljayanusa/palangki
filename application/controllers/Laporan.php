<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
    	parent::__construct();
		$this->load->model(array('laporan_model'));
    	$this->load->helper(array('url_helper', 'form', 'url'));
		$this->load->library(array('form_validation'));
  	}

	public function pelanggan()
	{
		$data=array(
			'konten'=>'pelanggan',
			'halaman' => 'Pelanggan',
			'judul' => 'Palangki',
			'judul_box' => 'Daftar Pelanggan',
			'pengguna' => $this->laporan_model->get_pelanggan()
		);

		$this->load->view('templates/admin', $data);
	}

	public function pelanggan_cetak()
	{
		$data=array(
			'pengguna' => $this->laporan_model->get_laporan_pelanggan(),
			'tanggal' => $this->laporan_model->get_tanggal_pembayaran()
		);

	    if($data['pengguna'] != NULL && $data['tanggal'] != NULL){
			$this->load->library('pdf');

			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "pelanggan.pdf";
			$this->pdf->load_view('pelanggan_cetak', $data);
		}
		else{
			$this->session->set_flashdata('error',"Tidak ada data pada laporan yang diminta");
			redirect('pelanggan');
		}
	}

	public function pesanan()
	{
		$data=array(
			'konten'=>'pesanan',
			'halaman' => 'Pesanan',
			'judul' => 'Palangki',
			'judul_box' => 'Pilih Pesanan Berdasarkan Tanggal, Bulan, Tahun'
		);

		$this->load->view('templates/admin', $data);
	}

	public function tanggal()
	{
		$data=array(
			'konten'=>'tanggal',
			'halaman' => 'Pesanan',
			'judul' => 'Palangki',
			'judul_box' => 'Laporan Berdasakan Tanggal'
		);

		$this->load->view('templates/admin', $data);
	}

	public function tanggal_cetak()
	{
		$data=array(
			'pembayaran' => $this->laporan_model->get_tanggal(),
			'tanggal' => $this->laporan_model->get_tanggal_pembayaran()
		);

		if($data['pembayaran'] != NULL && $data['tanggal'] != NULL){
			$this->load->library('pdf');

			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "tanggal.pdf";
			$this->pdf->load_view('tanggal_cetak', $data);
		}
		else{
			$this->session->set_flashdata('error',"Tidak ada data pada laporan yang diminta");
			redirect('pesanan/tanggal');
		}
	}

	public function bulan()
	{
		$data=array(
			'konten'=>'bulan',
			'halaman' => 'Pesanan',
			'judul' => 'Palangki',
			'judul_box' => 'Laporan Berdarkan Bulan'
		);

		$this->load->view('templates/admin', $data);
	}

	public function bulan_cetak()
	{
		$data=array(
			'pembayaran' => $this->laporan_model->get_bulan(),
			'bulan' => $this->laporan_model->get_bulan_pembayaran()
		);

	    if($data['pembayaran'] != NULL && $data['bulan'] != NULL){
			$this->load->library('pdf');

			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "bulan.pdf";
			$this->pdf->load_view('bulan_cetak', $data);
		}
		else{
			$this->session->set_flashdata('error',"Tidak ada data pada laporan yang diminta");
			redirect('pesanan/bulan');
		}
	}

	public function tahun()
	{
		$data=array(
			'konten'=>'tahun',
			'halaman' => 'Pesanan',
			'judul' => 'Palangki',
			'judul_box' => 'Laporan Berdarkan Tahun'
		);

		$this->load->view('templates/admin', $data);
	}

	public function tahun_cetak()
	{
		$data=array(
			'pembayaran' => $this->laporan_model->get_tahun(),
			'tahun' => $this->laporan_model->get_tahun_pembayaran()
		);

	    if($data['pembayaran'] != NULL && $data['tahun'] != NULL){
			$this->load->library('pdf');

			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "tahun.pdf";
			$this->pdf->load_view('tahun_cetak', $data);
		}
		else{
			$this->session->set_flashdata('error',"Tidak ada data pada laporan yang diminta");
			redirect('pesanan/tahun');
		}
	}

}