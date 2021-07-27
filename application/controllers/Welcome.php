<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data=array(
			'title' => 'Plunk-Q Sport'
		);
		$this->load->view('welcome', $data);
	}
}