<?php echo form_open_multipart('produk/update/'.$produk_item->kode_produk);?>
<input type="hidden" readonly name="kode_lama" value="<?php echo $produk_item->kode_produk; ?>" class="form-control" >
<div class="form-group">
    <label class='col-md-3'>Nama Produk</label>
    <div class='col-md-9'>
    <input type="text" name="nama" class="form-control" value="<?php echo $produk_item->nama_produk; ?>" required >
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Jenis Produk</label>
    <div class='col-md-9'>
    <input type="text" name="jenis" class="form-control" value="<?php echo $produk_item->jenis_produk; ?>" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Jumlah Produk</label>
    <div class='col-md-9'>
    <input type="number" name="jumlah" class="form-control" value="<?php echo $produk_item->jumlah_produk; ?>" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Harga Produk</label>
    <div class='col-md-9'>
    <input type="number" name="harga" class="form-control" value="<?php echo $produk_item->harga_produk; ?>" required >
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
<button type="submit" value="'produk/update/'.<?= $produk_item->kode_produk; ?>" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
<?= form_close(); ?>