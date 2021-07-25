<?php

class User_model extends CI_Model {
  public function __construct(){
    $this->load->database();
  }

  public function get_user(){

    $query = $this->db->get('pengguna');
    return $query->result();

  }

  public function get_user_id($id = FALSE){

    $query = $this->db->get_where('pengguna', array('kode_pengguna' => $id));
    return $query->row();

  }

  public function regis(){
    $this->load->helper('url');

    $data = array(
      'nama_pengguna' => $this->input->post('nama'),
      'jenis_pengguna' => 'pelanggan',
      'alamat' => $this->input->post('alamat'),
      'kode_pos' => $this->input->post('pos'),
      'password' => md5($this->input->post('password'))
    );

    return $this->db->insert('pengguna', $data);
  }

  public function set_user(){
    $this->load->helper('url');

    $data = array(
      'nama_pengguna' => $this->input->post('nama'),
      'jenis_pengguna' => $this->input->post('jenis'),
      'alamat' => $this->input->post('alamat'),
      'kode_pos' => $this->input->post('pos'),
      'password' => md5($this->input->post('nama'))
    );

    return $this->db->insert('pengguna', $data);
  }

  public function update_user(){
    $this->load->helper(array('url', 'form'));

    $id = $this->input->post('kode_lama');

    $data = array(
      'nama_pengguna' => $this->input->post('nama'),
      'jenis_pengguna' => $this->input->post('jenis'),
      'alamat' => $this->input->post('alamat'),
      'kode_pos' => $this->input->post('pos'),
      'password' => md5($this->input->post('nama'))
    );

    $this->db->where('kode_pengguna', $id);
    return $this->db->update('pengguna', $data);
  }

  public function delete_user($id){
    return $this->db->delete('pengguna', array('kode_pengguna' => $id));
  }

}

?>
