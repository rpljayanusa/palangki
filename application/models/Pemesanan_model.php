<?php

class Pemesanan_model extends CI_Model {
  public function __construct(){
    $this->load->database();
  }

  public function get_pemesanan(){

    $query = $this->db->get('pemesanan');
    return $query->result();

  }

  public function get_bahan(){

    $query = $this->db->get('bahan');
    return $query->result();

  }

  public function get_pemesanan_id($id = FALSE){

    $query = $this->db->get_where('pemesanan', array('kode_pesanan' => $id));
    return $query->row();

  }

  public function set_pemesanan($id, $name){
    $this->load->helper('url');

    $kode = $id;
    $this->db->where('kode_produk', $kode);
    $query = $this->db->get('produk');
    $produk = $query->row();

    $data = array(
      'kode_produk' => $id,
      'kode_bahan' => $this->input->post('bahan'),
      'jumlah_pesanan' => $this->input->post('jumlah'),
      'ukuran' => $this->input->post('ukuran'),
      'harga' => $produk->harga_produk,
      'total_harga' => $produk->harga_produk*$this->input->post('jumlah'),
      'gambar' => $name
    );
    
    return $this->db->insert('pemesanan', $data);
  }

  public function kurang_stok_produk($id){
    $this->db->where('kode_produk', $id);
    $query = $this->db->get('produk');
    $produk = $query->row();

    if($produk->jumlah_produk > $this->input->post('jumlah')){
      $data = array(
        'jumlah_produk' => $produk->jumlah_produk - $this->input->post('jumlah')
      );
      
      $this->db->where('kode_produk', $id);
      return $this->db->update('produk', $data);
    }
    else{
      $this->session->set_flashdata('error',"Jumlah stok yang diminta tidak mencukupi");
      redirect('produk');
    }

    
  }

  public function tambah_stok_produk($id){
    $this->db->where('kode_pesanan', $id);
    $query = $this->db->get('pemesanan');
    $pesanan = $query->row();
    
    $kode = $pesanan->kode_produk;
    $this->db->where('kode_produk', $kode);
    $query = $this->db->get('produk');
    $produk = $query->row();

    $data = array(
      'jumlah_produk' => $produk->jumlah_produk + $pesanan->jumlah_pesanan
    );

    $this->db->where('kode_produk', $kode);
    return $this->db->update('produk', $data);
  }

  public function delete_pemesanan($id){
    return $this->db->delete('pemesanan', array('kode_pesanan' => $id));
  }

}

?>
