<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->model(array('user_model'));
    	$this->load->helper(array('url_helper', 'form', 'url'));
		$this->load->library(array('form_validation'));
  	}

	public function index()
	{
		$data=array(
			'konten'=>'user',
			'halaman' => 'User',
			'judul' => 'Palangki',
			'judul_box' => 'Daftar user',
			'user' => $this->user_model->get_user()
		);

		$this->load->view('templates/admin', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama Pengguna', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis Pengguna', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('pos', 'Kode Pos', 'required|trim');

		if($this->form_validation->run()==FALSE){
			$data=array(
				'konten'=>'user_tambah',
				'halaman' => 'User',
				'judul' => 'Palangki',
				'judul_box' => 'Tambah user',
				'user' => $this->user_model->get_user()
			);

			$this->load->view('templates/admin', $data);
		}else{
			$this->user_model->set_user();
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('user');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Pengguna', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis Pengguna', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('pos', 'Kode Pos', 'required|trim');

		if($this->form_validation->run()==FALSE){
			$data=array(
				'konten'=>'user_update',
				'halaman' => 'User',
				'judul' => 'Palangki',
				'judul_box' => 'Edit user',
				'user_item' => $this->user_model->get_user_id($id)
			);

			$this->load->view('templates/admin', $data);
		}else{
			$this->user_model->update_user();
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('user');
		}
	}

	public function delete($id)
	{
		$this->user_model->delete_user($id);
		redirect('user');
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('password', 'Password Pengguna', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Pengguna', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('pos', 'Kode Pos', 'required|trim');

		if($this->form_validation->run()==FALSE){
			$this->load->view('registrasi');
		}else{
			$this->user_model->regis();
			$this->session->set_flashdata('sukses',"Registrasi berhasil, silahkan melakukan login");
			redirect('login');
		}
	}

}