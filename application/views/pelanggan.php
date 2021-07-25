<!-- <form action="site_url('pelanggan/cetak')" method="post"> 
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
    <select class="form-control" required name="nama" style="width: 100%;">
        foreach($pengguna as $pengguna_item):
        <option> $pengguna_item->nama_pengguna;</option>
        endforeach;
    </select>
    </div>
</div>
<br><br>
<button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
</form> -->

<a href="<?php echo site_url('pelanggan/print'); ?>" target="_blank" class="btn bg-purple"><i class="fa fa-print"></i> Cetak Laporan Pelanggan</a><br><br>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Pelanggan</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($pengguna as $value) {?>
            <tr>
                <td class="text-center"><?= $no ?></td>
                <td><?= $value->nama_pengguna ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->kode_pos ?></td>
            </tr>
        <?php $no++; }?>
    </tbody>
</table>