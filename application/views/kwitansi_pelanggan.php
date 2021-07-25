<form action="<?php echo site_url('pembayaran/pelanggan_kwitansi_cetak'); ?>" method="post"> 
<div class="form-group">
    <label class='col-md-3'>Tanggal</label>
    <div class='col-md-9'>
    <input type="date" name="tanggal" class="form-control" required >
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>