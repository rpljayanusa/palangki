<a href="<?php echo site_url('pesanan/tanggal'); ?>"><button type="button" class="btn btn-primary">Tanggal</button></a> <br><br>
<a href="<?php echo site_url('pesanan/bulan'); ?>"><button type="button" class="btn btn-primary">Bulan</button></a> <br><br>
<a href="<?php echo site_url('pesanan/tahun'); ?>"><button type="button" class="btn btn-primary">Tahun</button></a><br><br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    Laporan Status
</button>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Laporan Status</h4>
            </div>
            <div class="modal-body text-center">
                <a href="<?= site_url('laporan/sudah_lunas'); ?>" target="_blank"><button type="button" class="btn btn-primary">Laporan Sudah Lunas</button></a>
                <a href="<?= site_url('laporan/belum_lunas'); ?>" target="_blank"><button type="button" class="btn btn-primary">Laporan Belum Lunas</button></a>
            </div>
        </div>
    </div>
</div>