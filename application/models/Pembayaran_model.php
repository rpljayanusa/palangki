<?php

class Pembayaran_model extends CI_Model {
  public function __construct(){
    $this->load->database();
  }

  public function get_pembayaran(){

    $query = $this->db->get('pembayaran');
    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->join('pemesanan', 'pemesanan.kode_pesanan = pembayaran.kode_pesanan');
    $query = $this->db->get();
    return $query->result();

  }

  public function get_pembayaran_pelanggan(){

    $query = $this->db->get('pembayaran');
    $this->db->select('*');
    $this->db->from('pembayaran'); 
    $this->db->where('nama_pemesan', $this->session->userdata('username'));
    $this->db->join('pemesanan', 'pemesanan.kode_pesanan = pembayaran.kode_pesanan');
    $query = $this->db->get();
    return $query->result();

  }

  public function get_pengguna(){

    $query = $this->db->get_where('pengguna', array('jenis_pengguna' => 'pelanggan'));
    return $query->result();

  }

  public function get_pembayaran_id($id = FALSE){

    $query = $this->db->get_where('pembayaran', array('kode_pembayaran' => $id));
    return $query->row();

  }

  public function set_pembayaran($id){
    $this->load->helper('url');

    $data = array(
      'kode_pesanan' => $id,
      'nama_pemesan' => $this->input->post('nama'),
      'status' => $this->input->post('status'),
      'tanggal' => date('Y-m-d')
    );

    return $this->db->insert('pembayaran', $data);
  }

  public function update_pembayaran(){
    $this->load->helper(array('url', 'form'));

    $id = $this->input->post('kode_lama');

    $data = array(
      'nama_pemesan' => $this->input->post('nama'),
      'status' => $this->input->post('status'),
      'tanggal' => date('Y-m-d')
    );

    $this->db->where('kode_pembayaran', $id);
    return $this->db->update('pembayaran', $data);
  }

  public function delete_pembayaran($id){
    return $this->db->delete('pembayaran', array('kode_pembayaran' => $id));
  }

}

?>
