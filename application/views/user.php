<a href="<?php echo site_url('user/tambah'); ?>"><button type="button" class="btn btn-primary">Tambah User</button></a> <br><br>
<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No</th>
    <th>Kode Pengguna</th>
    <th>Nama Pengguna</th>
    <th>Jenis Pengguna</th>
    <th>Alamat</th>
    <th>Kode Pos</th>
    <th class="col-md-2">Aksi</th>
  </tr>
  </thead>
  <tbody>
  <?php $no=0; foreach($user as $user_item):; $no++?>
  <tr>
    <th><?php echo $no; ?></th>
    <th><?php echo $user_item->kode_pengguna; ?></th>
    <th><?php echo $user_item->nama_pengguna; ?></th>
    <th><?php echo $user_item->jenis_pengguna; ?></th>
    <th><?php echo $user_item->alamat; ?></th>
    <th><?php echo $user_item->kode_pos; ?></th>
    <th>
      <center>
        <div class="tooltip-demo">
          <a href="<?php echo site_url('user/update/'.$user_item->kode_pengguna); ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data">Edit</a>
          <a href="<?php echo site_url('user/delete/'.$user_item->kode_pengguna); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">Hapus</a>
        </div>
      </center>
    </th>
  </tr>
  <?php endforeach; ?>
  </tbody>
  <tfoot>
  <tr>
    <th>No</th>
    <th>Kode Pengguna</th>
    <th>Nama Pengguna</th>
    <th>Jenis Pengguna</th>
    <th>Alamat</th>
    <th>Kode Pos</th>
    <th>Aksi</th>
  </tr>
  </tfoot>
</table>