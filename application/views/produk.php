<?php if ($this->session->userdata('jenis_pengguna') == 'admin' || $this->session->userdata('jenis_pengguna') == 'pemilik'): ?>
<a href="<?php echo site_url('produk/tambah'); ?>"><button type="button" class="btn btn-primary">Tambah Produk</button></a>&nbsp;<a href="<?php echo site_url('produk/cetak'); ?>" target="_blank" class="btn bg-purple"><i class="fa fa-print"></i> Cetak Laporan Produk</a><br><br>
<br><br>
<?php elseif ($this->session->userdata('jenis_pengguna') == 'gudang'): ?>
  <a href="<?php echo site_url('produk/tambah'); ?>"><button type="button" class="btn btn-primary">Tambah Produk</button></a><br><br>
<?php endif ?>
<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No</th>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Jenis Produk</th>
    <th>Stok Produk</th>
    <th>Harga Produk</th>
    <th>Gambar Produk</th>
    <th class="col-md-2">Aksi</th>
  </tr>
  </thead>
  <tbody>
  <?php $no=0; foreach($produk as $produk_item):; $no++?>
  <tr>
    <th><?php echo $no; ?></th>
    <th><?php echo $produk_item->kode_produk; ?></th>
    <th><?php echo $produk_item->nama_produk; ?></th>
    <th><?php echo $produk_item->jenis_produk; ?></th>
    <th><?php echo $produk_item->jumlah_produk; ?></th>
    <th>Rp <?php echo $produk_item->harga_produk; ?></th>
    <th><img src="<?php echo base_url('assets/produk/'.$produk_item->gambar_produk); ?>" width="100" length="auto"></th>
    <th>
      <center>
        <div class="tooltip-demo">
          <?php if ($this->session->userdata('jenis_pengguna') == 'admin' || $this->session->userdata('jenis_pengguna') == 'pelanggan'): ?>
          <a href="<?php echo site_url('produk/pesan/'.$produk_item->kode_produk); ?>" class="btn btn-primary btn-circle" data-popup="tooltip" data-placement="top" title="Pesan">Pesan</a>
          <?php endif ?>
          <?php if ($this->session->userdata('jenis_pengguna') == 'admin' || $this->session->userdata('jenis_pengguna') == 'gudang'): ?>
          <a href="<?php echo site_url('produk/update/'.$produk_item->kode_produk); ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data">Edit</a>
          <a href="<?php echo site_url('produk/delete/'.$produk_item->kode_produk); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">Hapus</a>
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
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Jenis Produk</th>
    <th>Stok Produk</th>
    <th>Harga Produk</th>
    <th>Gambar Produk</th>
    <th>Aksi</th>
  </tr>
  </tfoot>
</table>