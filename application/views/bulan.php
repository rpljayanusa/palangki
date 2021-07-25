<form action="<?php echo site_url('pesanan/bulan/cetak'); ?>" method="post"> 
<div class="form-group">
    <label class='col-md-3'>Bulan</label>
    <div class='col-md-9'>
    <input type="month" name="tanggal" class="form-control" required >
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>