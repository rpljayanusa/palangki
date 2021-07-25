<form action="<?php echo site_url('pembayaran/tambah/'.$pemesanan_item->kode_pesanan); ?>" method="post"> 
<div class="form-group">
    <label class='col-md-3'>Kode Pesanan</label>
    <div class='col-md-9'>
    <input type="text" name="pesanan" readonly disabled="disabled" value="<?php echo $pemesanan_item->kode_pesanan; ?>" class="form-control" required >
    </div>
</div>
<br><br><br>
<div class="form-group">
    <label class='col-md-3'>Nama Pemesan</label>
    <div class='col-md-9'>
    <select class="form-control" required name="nama" style="width: 100%;">
        <?php foreach($pengguna as $pengguna_item): ?>
        <option><?php echo $pengguna_item->nama_pengguna; ?></option>
        <?php endforeach; ?>
    </select>
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Total Harga</label>
    <div class='col-md-9'>
    <input type="number" disabled="disabled" value="<?php echo $pemesanan_item->total_harga; ?>" name="harga" class="form-control" required >
    </div>
</div>
<br><br>
<div class="form-group">
    <label class='col-md-3'>Status Pembayaran</label>
    <div class='col-md-9'>
        <div class="radio">
        <label>
            <input type="radio" name="status" value="lunas" checked>
            Lunas
        </label>
        </div>
        <div class="radio">
        <label>
            <input type="radio" name="status" value="belum lunas">
            Belum Lunas
        </label>
        </div>
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form>