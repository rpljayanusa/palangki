<?php

class Produk_model extends CI_Model {
  public function __construct(){
    $this->load->database();
  }

  public function get_produk(){

    $query = $this->db->get('produk');
    return $query->result();

  }

  public function get_produk_id($id = FALSE){

    $query = $this->db->get_where('produk', array('kode_produk' => $id));
    return $query->row();

  }

  public function set_produk($name){
    $this->load->helper('url');

    $data = array(
      'nama_produk' => $this->input->post('nama'),
      'jenis_produk' => $this->input->post('jenis'),
      'jumlah_produk' => $this->input->post('jumlah'),
      'harga_produk' => $this->input->post('harga'),
      'gambar_produk' => $name
    );

    return $this->db->insert('produk', $data);
  }

  public function update_produk($name){
    $this->load->helper(array('url', 'form'));

    $id = $this->input->post('kode_lama');

    $data = array(
      'nama_produk' => $this->input->post('nama'),
      'jenis_produk' => $this->input->post('jenis'),
      'jumlah_produk' => $this->input->post('jumlah'),
      'harga_produk' => $this->input->post('harga'),
      'gambar_produk' => $name
    );

    $this->db->where('kode_produk', $id);
    return $this->db->update('produk', $data);
  }

  public function delete_produk($id){
    return $this->db->delete('produk', array('kode_produk' => $id));
  }

}

?>
