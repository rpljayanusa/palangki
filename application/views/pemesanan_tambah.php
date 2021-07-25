<?php echo form_open_multipart('produk/pesan/'.$produk_item->kode_produk);?>
<div class="form-group">
    <label class='col-md-3'>Kode Bahan</label>
    <div class='col-md-9'>
    <select class="form-control" required name="bahan" style="width: 100%;">
        <?php foreach($bahan as $bahan_item): ?>
        <option><?php echo $bahan_item->kode_bahan; ?></option>
        <?php endforeach; ?>
    </select>
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Jumlah Pesanan</label>
    <div class='col-md-9'>
    <input id="myJumlah" type="number" name="jumlah" class="form-control" onchange="jumlahFunction()" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Ukuran</label>
    <div class='col-md-9'>
    <input type="text" name="ukuran" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Harga</label>
    <div class='col-md-9'>
    <input id="harga" disabled="disabled" value="<?php echo $produk_item->harga_produk; ?>" type="number" name="harga" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Total Harga</label>
    <div class='col-md-9'>
    <input id="total" disabled="disabled" type="number" name="total_harga" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Gambar (opsional)</label>
    <div class='col-md-9'>
    <input type="file" name="gambar" class="form-control" >
    <label>Jika Memiliki Design Tersendiri, Silahkan Upload Disini.</label>
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
<?= form_close(); ?>