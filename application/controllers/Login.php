<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if($this->session->userdata('role') == 'organizer' || $this->session->userdata('role') == 'pengunjung'){
			redirect('event');
	   	}

		$this->load->view('login');
	}

	function auth(){
		$username    = $this->input->post('username',TRUE);
		$password = md5($this->input->post('password',TRUE));
		$validate = $this->login_model->validate($username,$password);
		if($validate->num_rows() > 0){
			$data = $validate->row_array(); 
			$kode_pengguna  = $data['kode_pengguna'];
			$jenis_pengguna  = $data['jenis_pengguna'];
			$alamat  = $data['alamat'];
			$kode_pos  = $data['kode_pos'];
			$username  = $data['nama_pengguna'];
			$password  = $data['password'];
			$sesdata = array(
				'kode_pengguna' => $kode_pengguna,
				'jenis_pengguna' => $jenis_pengguna,
				'alamat'     => $alamat,
				'kode_pos' => $kode_pos,
				'username' => $username,
				'password'     => $password,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($jenis_pengguna === 'admin'){
				redirect('home');
			}elseif($jenis_pengguna === 'gudang'){
				redirect('home');
			}elseif($jenis_pengguna === 'pelanggan'){
				redirect('home');
			}elseif($jenis_pengguna === 'pemilik'){
				redirect('home');
			}
	
		}else{
			echo $this->session->set_flashdata('error','Username atau password salah');
			redirect('login');
		}
	}

  	function logout(){
    	$this->session->sess_destroy();
    	redirect('login');
  	}

}