<form action="<?php echo site_url('user/update/'.$user_item->kode_pengguna); ?>" method="post">
<input type="hidden" readonly name="kode_lama" value="<?php echo $user_item->kode_pengguna; ?>" class="form-control" >
<div class="form-group">
    <label class='col-md-3'>Nama Pengguna</label>
    <div class='col-md-9'>
    <input type="text" name="nama" class="form-control" value="<?php echo $user_item->nama_pengguna; ?>" required >
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Jenis Pengguna</label>
    <div class='col-md-9'>
    <input type="text" name="jenis" class="form-control" value="<?php echo $user_item->jenis_pengguna; ?>" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Alamat</label>
    <div class='col-md-9'>
    <input type="text" name="alamat" class="form-control" value="<?php echo $user_item->alamat; ?>" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Kode Pos</label>
    <div class='col-md-9'>
    <input type="number" name="pos" class="form-control" value="<?php echo $user_item->kode_pos; ?>" required >
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>