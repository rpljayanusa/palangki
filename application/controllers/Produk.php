<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->model(array('produk_model', 'pemesanan_model'));
    	$this->load->helper(array('url_helper', 'form', 'url'));
		$this->load->library(array('form_validation'));
  	}

	public function index()
	{
		$data=array(
			'konten'=>'produk',
			'halaman' => 'Produk',
			'judul' => 'Palangki',
			'judul_box' => 'Daftar Produk',
			'produk' => $this->produk_model->get_produk()
		);

		$this->load->view('templates/admin', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis Produk', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah Produk', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required|trim');
		$this->form_validation->set_rules('gambar', 'Gambar Produk', 'required|trim');
		
		$config['upload_path']          = './assets/produk/';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['max_size']             = 2048;
		$config['max_width']            = 40000;
		$config['max_height']           = 40000;

		$this->load->library('upload', $config);

		if(! $this->upload->do_upload('gambar') && $this->form_validation->run()==FALSE){
			$data=array(
				'konten'=>'produk_tambah',
				'halaman' => 'Produk',
				'judul' => 'Palangki',
				'judul_box' => 'Daftar produk',
				'produk' => $this->produk_model->get_produk()
			);

			$this->load->view('templates/admin', $data);
		}else{
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];
			$this->produk_model->set_produk($name);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('produk');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis Produk', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah Produk', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required|trim');
		$this->form_validation->set_rules('gambar', 'Gambar Produk', 'required|trim');

		$produk = $this->produk_model->get_produk_id($id);
		$nama = './assets/produk/'.$produk->gambar_produk;

		$config['upload_path']          = './assets/produk/';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['max_size']             = 2048;
		$config['max_width']            = 40000;
		$config['max_height']           = 40000;

		$this->load->library('upload', $config);

		if(! $this->upload->do_upload('gambar') && $this->form_validation->run()==FALSE){
			$data=array(
				'konten'=>'produk_update',
				'halaman' => 'Produk',
				'judul' => 'Palangki',
				'judul_box' => 'Edit Produk',
				'produk_item' => $this->produk_model->get_produk_id($id)
			);

			$this->load->view('templates/admin', $data);
		}else{
			if(is_readable($nama) && unlink($nama)){
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$this->produk_model->update_produk($name);
				$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
				redirect('produk');
			}
		}
	}

	public function pesan($id)
	{
		$this->form_validation->set_rules('bahan', 'Kode Bahan', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'required|trim');
		
		$config['upload_path']          = './assets/pesan/';
		$config['allowed_types']        = 'png|jpg|gif';
		$config['max_size']             = 2048;
		$config['max_width']            = 40000;
		$config['max_height']           = 40000;

		$this->load->library('upload', $config);

		if($this->form_validation->run()==FALSE){
			$data=array(
				'konten'=>'pemesanan_tambah',
				'halaman' => 'Produk',
				'judul' => 'Palangki',
				'judul_box' => 'Pesan Produk',
				'bahan' => $this->pemesanan_model->get_bahan(),
				'produk_item' => $this->produk_model->get_produk_id($id)
			);

			$this->load->view('templates/admin', $data);
		}else{
			$this->pemesanan_model->kurang_stok_produk($id);
			if($this->upload->do_upload('gambar')){
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
			}
			else{
				$name = NULL;
			}
			$this->pemesanan_model->set_pemesanan($id, $name);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('pemesanan');
		}
	}

	public function delete($id)
	{
		$produk = $this->produk_model->get_produk_id($id);
		$nama = './assets/produk/'.$produk->gambar_produk;

		if(is_readable($nama) && unlink($nama)){
			$this->produk_model->delete_produk($id);
			redirect('produk');
		}
		else {
			$this->produk_model->delete_produk($id);
			redirect('produk');
		}
	}
	public function cetak()
	{
		$data = [
            'title' => 'Laporan Data Produk',
            'data' => $this->db->get('produk')->result()
        ];
        $this->template->laporan('laporan/lap_produk', $data);
	}
}