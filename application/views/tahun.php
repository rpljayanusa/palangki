<form action="<?php echo site_url('pesanan/tahun/cetak'); ?>" method="post"> 
<div class="form-group">
    <label class='col-md-3'>Tahun</label>
    <div class='col-md-9'>
    <input type="number" min="1900" max="2099" step="1" value="<?php echo date('Y'); ?>" name="tanggal" class="form-control" required >
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>