<?php echo form_open_multipart('produk/tambah');?>
<div class="form-group">
    <label class='col-md-3'>Nama Produk</label>
    <div class='col-md-9'>
    <input type="text" name="nama" class="form-control" required >
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Jenis Produk</label>
    <div class='col-md-9'>
    <input type="text" name="jenis" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Jumlah Produk</label>
    <div class='col-md-9'>
    <input type="number" name="jumlah" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Harga</label>
    <div class='col-md-9'>
    <input type="number" name="harga" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Gambar</label>
    <div class='col-md-9'>
    <input type="file" name="gambar" class="form-control" required >
    </div>
</div>
<br><br>
<button type="submit" value="tambah/produk" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
<?= form_close(); ?>