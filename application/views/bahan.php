<?php if ($this->session->userdata('jenis_pengguna') == 'pemilik' ): ?>
    <a href="<?php echo site_url('bahan/cetak'); ?>" target="_blank" class="btn bg-purple"><i class="fa fa-print"></i> Cetak Laporan Bahan</a><br><br>
<?php else: ?>
    <a href="<?php echo site_url('bahan/tambah'); ?>"><button type="button" class="btn btn-primary">Tambah Bahan</button></a>&nbsp;<a href="<?php echo site_url('bahan/cetak'); ?>" target="_blank" class="btn bg-purple"><i class="fa fa-print"></i> Cetak Laporan Bahan</a><br><br>
<?php endif ?>
<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No</th>
    <th>Kode Bahan</th>
    <th>Nama Bahan</th>
    <th>Jumlah Bahan</th>
    <th>Harga Bahan</th>
    <?php if ($this->session->userdata('jenis_pengguna') != 'pemilik' ): ?>
        <th class="col-md-2">Aksi</th>
    <?php endif; ?>
  </tr>
  </thead>
  <tbody>
  <?php $no=0; foreach($bahan as $bahan_item):; $no++?>
  <tr>
    <th><?php echo $no; ?></th>
    <th><?php echo $bahan_item->kode_bahan; ?></th>
    <th><?php echo $bahan_item->nama_bahan; ?></th>
    <th><?php echo $bahan_item->jumlah_bahan; ?></th>
    <th><?php echo $bahan_item->harga_bahan; ?></th>
    <?php if ($this->session->userdata('jenis_pengguna') != 'pemilik' ): ?>
    <th>
      <center>
        <div class="tooltip-demo">
          <a href="<?php echo site_url('bahan/update/'.$bahan_item->kode_bahan); ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data">Edit</a>
          <a href="<?php echo site_url('bahan/delete/'.$bahan_item->kode_bahan); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">Hapus</a>
        </div>
      </center>
    </th>
    <?php endif; ?>
  </tr>
  <?php endforeach; ?>
  </tbody>
  <tfoot>
  <tr>
    <th>No</th>
    <th>Kode Bahan</th>
    <th>Nama Bahan</th>
    <th>Jumlah Bahan</th>
    <th>Harga Bahan</th>
    <?php if ($this->session->userdata('jenis_pengguna') != 'pemilik' ): ?>
        <th>Aksi</th>
    <?php endif; ?>
  </tr>
  </tfoot>
</table>