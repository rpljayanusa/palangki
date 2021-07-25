<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
	public function print()
	{
		$data = [
            'title' => 'Laporan Data Pelanggan',
            'data' => $this->db->where('jenis_pengguna','pelanggan')->get('pengguna')->result()
        ];
        $this->template->laporan('laporan/lap_pelanggan', $data);
	}
}
