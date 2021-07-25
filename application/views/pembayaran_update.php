<form action="<?php echo site_url('pembayaran/update/'.$pembayaran_item->kode_pembayaran); ?>" method="post">
<input type="hidden" readonly name="kode_lama" value="<?php echo $pembayaran_item->kode_pembayaran; ?>" class="form-control" >
<div class="form-group">
    <label class='col-md-3'>Kode Pesanan</label>
    <div class='col-md-9'>
    <input type="text" readonly name="pesanan" class="form-control" value="<?php echo $pembayaran_item->kode_pesanan; ?>" required >
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Nama Pemesan</label>
    <div class='col-md-9'>
    <select class="form-control" required name="nama" style="width: 100%;">
        <?php foreach($pengguna as $pengguna_item): ?>
        <option <?php echo $pengguna_item->nama_pengguna == $pembayaran_item->nama_pemesan ? "selected" : ""; ?> > <?php echo $pengguna_item->nama_pengguna; ?> </option>
        <?php endforeach; ?>
    </select>
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Status</label>
    <div class='col-md-9'>
    <div class="radio">
        <label>
            <input type="radio" name="status" value="lunas" <?php echo $pembayaran_item->status == "lunas" ? "checked" : ""; ?>>
            Lunas
        </label>
        </div>
        <div class="radio">
        <label>
            <input type="radio" name="status" value="belum lunas" <?php echo $pembayaran_item->status == "belum lunas" ? "checked" : ""; ?>>
            Belum Lunas
        </label>
        </div>
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>