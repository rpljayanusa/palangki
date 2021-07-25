<form action="<?php echo site_url('user/tambah'); ?>" method="post"> 
<div class="form-group">
    <label class='col-md-3'>Nama Pengguna</label>
    <div class='col-md-9'>
    <input type="text" name="nama" class="form-control" required >
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Jenis Pengguna</label>
    <div class='col-md-9'>
    <select class="form-control" required name="jenis" style="width: 100%;">
        <option value="pelanggan">Pelanggan</option>
        <option value="pemilik">Pemilik</option>
        <option value="gudang">Gudang</option>
    </select>
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Alamat</label>
    <div class='col-md-9'>
    <input type="text" name="alamat" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Kode Pos</label>
    <div class='col-md-9'>
    <input type="number" name="pos" class="form-control" required >
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>