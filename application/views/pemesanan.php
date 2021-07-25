<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No</th>
    <th>Kode Pesanan</th>
    <th>Kode Bahan</th>
    <th>Jumlah Pesanan</th>
    <th>Ukuran</th>
    <th>Harga</th>
    <th>Total Harga</th>
    <th>Gambar</th>
    <th class="col-md-2">Aksi</th>
  </tr>
  </thead>
  <tbody>
  <?php $no=0; foreach($pemesanan as $pemesanan_item):; $no++?>
  <tr>
    <th><?php echo $no; ?></th>
    <th><?php echo $pemesanan_item->kode_pesanan; ?></th>
    <th><?php echo $pemesanan_item->kode_bahan; ?></th>
    <th><?php echo $pemesanan_item->jumlah_pesanan; ?></th>
    <th><?php echo $pemesanan_item->ukuran; ?></th>
    <th>Rp <?php echo $pemesanan_item->harga; ?></th>
    <th>Rp <?php echo $pemesanan_item->total_harga; ?></th>
    <th><img src="<?php echo base_url('assets/pesan/'.$pemesanan_item->gambar); ?>" width="100" length="auto" alt="Tidak ada gambar"></th>
    <th>
      <center>
        <div class="tooltip-demo">
          <a href="<?php echo site_url('pembayaran/tambah/'.$pemesanan_item->kode_pesanan); ?>" class="btn btn-primary btn-circle" data-popup="tooltip" data-placement="top" title="Pembayaran">Bayar</a>
          <?php if ($this->session->userdata('jenis_pengguna') == 'admin'): ?>
          <a href="<?php echo site_url('pemesanan/delete/'.$pemesanan_item->kode_pesanan); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">Hapus</a>
          <?php endif ?>
        </div>
      </center>
    </th>
  </tr>
  <?php endforeach; ?>
  </tbody>
  <tfoot>
  <tr>
    <th>No</th>
    <th>Kode Pesanan</th>
    <th>Kode Bahan</th>
    <th>Jumlah Pesanan</th>
    <th>Ukuran</th>
    <th>Harga</th>
    <th>Total Harga</th>
    <th>Gambar</th>
    <th>Aksi</th>
  </tr>
  </tfoot>
</table>