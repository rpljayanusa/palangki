<form action="<?php echo site_url('bahan/update/'.$bahan_item->kode_bahan); ?>" method="post">
<input type="hidden" readonly name="kode_lama" value="<?php echo $bahan_item->kode_bahan; ?>" class="form-control" >
<div class="form-group">
    <label class='col-md-3'>Nama Bahan</label>
    <div class='col-md-9'>
    <input type="text" name="nama" class="form-control" value="<?php echo $bahan_item->nama_bahan; ?>" required >
    </div>
</div>
<div class="form-group">
    <label class='col-md-3'>Jumlah Bahan</label>
    <div class='col-md-9'>
    <input type="text" name="jumlah" class="form-control" value="<?php echo $bahan_item->jumlah_bahan; ?>" required >
    </div>
</div>
<div class="form-group">
    <label class='col-md-3'>Harga Bahan</label>
    <div class='col-md-9'>
    <input type="text" name="harga" class="form-control" value="<?php echo $bahan_item->harga_bahan; ?>" required >
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>