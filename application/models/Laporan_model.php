<?php

class Laporan_model extends CI_Model {
  public function __construct(){
    $this->load->database();
  }

  public function get_bahan(){

    $query = $this->db->get('bahan');
    return $query->result();

  }

  public function get_pelanggan(){

    $query = $this->db->get_where('pengguna', array('jenis_pengguna' => 'pelanggan'));
    return $query->result();

  }

  public function get_laporan_pelanggan(){

    $nama = $this->input->post('nama');
    $tanggal = $this->input->post('tanggal');

    $transaksi = $this->db->get_where('pembayaran', array('nama_pemesan' => $nama, 'tanggal' => $tanggal));
    $pemesan = $transaksi->row();

    $query = $this->db->get_where('pengguna', array('nama_pengguna' => $pemesan->nama_pemesan));
    return $query->result();

  }

  public function get_tanggal_pembayaran(){

    $tanggal = $this->input->post('tanggal');
    
    $query = $this->db->get_where('pembayaran', array('tanggal' => $tanggal));
    return $query->row();

  }

  public function get_tanggal(){

    $tanggal = $this->input->post('tanggal');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->where('tanggal', $tanggal);
    $this->db->join('pemesanan', 'pemesanan.kode_pesanan = pembayaran.kode_pesanan');
    $this->db->join('produk', 'produk.kode_produk = pemesanan.kode_produk');
    $query = $this->db->get();
    return $query->result();

  }

  public function get_bulan(){

    $bulan = $this->input->post('tanggal');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->where("DATE_FORMAT(tanggal,'%Y-%m')", $bulan);
    $this->db->join('pemesanan', 'pemesanan.kode_pesanan = pembayaran.kode_pesanan');
    $this->db->join('produk', 'produk.kode_produk = pemesanan.kode_produk');
    $query = $this->db->get();
    
    return $query->result();

  }

  public function get_bulan_pembayaran(){

    $bulan = $this->input->post('tanggal');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->where("DATE_FORMAT(tanggal,'%Y-%m')", $bulan);
    $query = $this->db->get();

    return $query->row();

  }

  public function get_tahun(){

    $tahun = $this->input->post('tanggal');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->where("DATE_FORMAT(tanggal,'%Y')", $tahun);
    $this->db->join('pemesanan', 'pemesanan.kode_pesanan = pembayaran.kode_pesanan');
    $this->db->join('produk', 'produk.kode_produk = pemesanan.kode_produk');
    $query = $this->db->get();
    
    return $query->result();

  }

  public function get_tahun_pembayaran(){

    $tahun = $this->input->post('tanggal');

    $this->db->select('*');
    $this->db->from('pembayaran');
    $this->db->where("DATE_FORMAT(tanggal,'%Y')", $tahun);
    $query = $this->db->get();
    
    return $query->row();

  }

}

?>
