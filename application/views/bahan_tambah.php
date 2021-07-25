<form action="<?php echo site_url('bahan/tambah'); ?>" method="post"> 
<div class="form-group">
    <label class='col-md-3'>Nama Bahan</label>
    <div class='col-md-9'>
    <input type="text" name="nama" class="form-control" required >
    </div>
</div>
<div class="form-group">
    <label class='col-md-3'>Jumlah Bahan</label>
    <div class='col-md-9'>
    <input type="number" name="jumlah" class="form-control" required >
    </div>
</div>
<div class="form-group">
    <label class='col-md-3'>Harga Bahan</label>
    <div class='col-md-9'>
    <input type="number" name="harga" class="form-control" required >
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>