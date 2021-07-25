<form action="<?php echo site_url('pembayaran/kwitansi'); ?>" method="post"> 
<div class="form-group">
    <label class='col-md-3'>Tanggal</label>
    <div class='col-md-9'>
    <input type="date" name="tanggal" class="form-control" required >
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Nama Pemesan</label>
    <div class='col-md-9'>
    <select class="form-control" required name="nama_pengguna   " style="width: 100%;">
        <?php foreach($pengguna as $pengguna_item): ?>
        <option><?php echo $pengguna_item->nama_pengguna; ?></option>
        <?php endforeach; ?>
    </select>
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>