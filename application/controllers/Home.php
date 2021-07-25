<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->helper(array('url_helper', 'form', 'url'));
		$this->load->library(array('form_validation'));
  	}

	public function index()
	{
		$data=array(
			'konten'=>'home',
			'halaman' => 'Home',
			'judul' => 'Palangki',
			'judul_box' => ''
		);

		$this->load->view('templates/admin', $data);
	}

}