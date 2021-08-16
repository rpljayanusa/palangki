 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Pembayaran extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model(array('pembayaran_model', 'pemesanan_model', 'laporan_model'));
			$this->load->helper(array('url_helper', 'form', 'url'));
			$this->load->library(array('form_validation'));
		}

		public function index()
		{
			$data = array(
				'konten' => 'pembayaran',
				'halaman' => 'Pembayaran',
				'judul' => 'Palangki',
				'judul_box' => 'Daftar Pembayaran',
				'pembayaran' => $this->pembayaran_model->get_pembayaran()
			);

			$this->load->view('templates/admin', $data);
		}

		public function pelanggan()
		{
			$data = array(
				'konten' => 'pembayaran',
				'halaman' => 'Pembayaran',
				'judul' => 'Palangki',
				'judul_box' => 'Daftar Pembayaran',
				'pembayaran' => $this->pembayaran_model->get_pembayaran_pelanggan()
			);

			$this->load->view('templates/admin', $data);
		}

		public function tambah($id)
		{
			$this->form_validation->set_rules('nama', 'Nama Pemesan', 'required|trim');
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'konten' => 'pembayaran_tambah',
					'halaman' => 'Pembayaran',
					'judul' => 'Palangki',
					'judul_box' => 'Tambah Pembayaran',
					'pemesanan_item' => $this->pemesanan_model->get_pemesanan_id($id),
					'pengguna' => $this->pembayaran_model->get_pengguna()
				);

				$this->load->view('templates/admin', $data);
			} else {
				$config['upload_path'] = 'assets/bukti';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = 819200;
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('gambar')) {
					$data['upload_data'] = $this->upload->data('file_name');
					$image = 'assets/bukti/' . $data['upload_data'];
				}
				if ($_FILES['gambar']['size'] > 819200) {
					$this->session->set_flashdata('error', "Ukuran file tidak boleh melebihi 800KB");
				} else {
					$this->pembayaran_model->set_pembayaran($id, $image);
					$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
				}
				redirect('pembayaran');
			}
		}

		public function update($id)
		{
			$this->form_validation->set_rules('nama', 'Nama pembayaran', 'required|trim');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'konten' => 'pembayaran_update',
					'halaman' => 'pembayaran',
					'judul' => 'Palangki',
					'judul_box' => 'Edit pembayaran',
					'pembayaran_item' => $this->pembayaran_model->get_pembayaran_id($id),
					'pengguna' => $this->pembayaran_model->get_pengguna()
				);

				$this->load->view('templates/admin', $data);
			} else {
				$this->pembayaran_model->update_pembayaran();
				$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
				redirect('pembayaran');
			}
		}

		public function delete($id)
		{
			$this->pembayaran_model->delete_pembayaran($id);
			redirect('pembayaran');
		}

		public function kwitansi()
		{
			$data = array(
				'konten' => 'kwitansi',
				'halaman' => 'Pembayaran',
				'judul' => 'Palangki',
				'judul_box' => 'Kwitansi',
				'pengguna' => $this->laporan_model->get_pelanggan()
			);

			$this->load->view('templates/admin', $data);
		}
		public function cetak_invoice($kode)
		{
			$query_data = $this->db->from('pembayaran')
				->join('pemesanan', 'pembayaran.kode_pesanan=pemesanan.kode_pesanan')
				->join('produk', 'pemesanan.kode_produk=produk.kode_produk')
				->where('kode_pembayaran', $kode)
				->get();
			$data = [
				'row' => $query_data->row_array(),
				'result' => $query_data->result_array()
			];
			$this->load->view('kwitansi_print', $data);
		}

		public function kwitansi_cetak()
		{
			$data = array(
				'pemesanan' => $this->pembayaran_model->get_pemesanan(),
				'pengguna' => $this->laporan_model->get_tanggal_pembayaran()
			);

			if ($data['pemesanan'] != NULL && $data['pengguna'] != NULL) {
				$this->load->library('pdf');

				$this->pdf->setPaper('A4', 'potrait');
				$this->pdf->filename = "kwitansi.pdf";
				$this->pdf->load_view('kwitansi_cetak', $data);
			} else {
				$this->session->set_flashdata('error', "Tidak ada data pada laporan yang diminta");
				redirect('pembayaran/kwitansi');
			}
		}

		public function pelanggan_kwitansi()
		{
			$data = array(
				'konten' => 'kwitansi_pelanggan',
				'halaman' => 'Pembayaran',
				'judul' => 'Palangki',
				'judul_box' => 'Kwitansi'
			);

			$this->load->view('templates/admin', $data);
		}

		public function pelanggan_kwitansi_cetak()
		{
			$data = array(
				'pemesanan' => $this->pembayaran_model->get_pemesanan_pelanggan(),
				'pengguna' => $this->laporan_model->get_tanggal_pembayaran()
			);

			if ($data['pemesanan'] != NULL && $data['pengguna'] != NULL) {
				$this->load->library('pdf');

				$this->pdf->setPaper('A4', 'potrait');
				$this->pdf->filename = "kwitansi.pdf";
				$this->pdf->load_view('kwitansi_pelanggan_cetak', $data);
			} else {
				$this->session->set_flashdata('error', "Tidak ada data pada laporan yang diminta");
				redirect('kwitansi-pembayaran');
			}
		}
	}
