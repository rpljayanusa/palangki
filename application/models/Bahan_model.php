<?php

class Bahan_model extends CI_Model {
  public function __construct(){
    $this->load->database();
  }

  public function get_bahan(){

    $query = $this->db->get('bahan');
    return $query->result();

  }

  public function get_bahan_id($id = FALSE){

    $query = $this->db->get_where('bahan', array('kode_bahan' => $id));
    return $query->row();

  }

  public function set_bahan(){
    $this->load->helper('url');

    $data = array(
      'nama_bahan' => $this->input->post('nama'),
      'jumlah_bahan' => $this->input->post('jumlah'),
      'harga_bahan' => $this->input->post('harga')
    );

    return $this->db->insert('bahan', $data);
  }

  public function update_bahan(){
    $this->load->helper(array('url', 'form'));

    $id = $this->input->post('kode_lama');

    $data = array(
      'nama_bahan' => $this->input->post('nama'),
      'jumlah_bahan' => $this->input->post('jumlah'),
      'harga_bahan' => $this->input->post('harga')
    );

    $this->db->where('kode_bahan', $id);
    return $this->db->update('bahan', $data);
  }

  public function delete_bahan($id){
    return $this->db->delete('bahan', array('kode_bahan' => $id));
  }

}

?>
