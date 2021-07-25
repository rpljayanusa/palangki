<?php

class Login_model extends CI_Model {
	
	function validate($username,$password){
    	$this->db->where('nama_pengguna',$username);
    	$this->db->where('password',$password);
    	$result = $this->db->get('pengguna',1);
    	return $result;
  }
}