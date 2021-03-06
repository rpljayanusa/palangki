<?php if ($this->session->userdata('jenis_pengguna') == 'admin') : ?>
    <!-- <a href="<?php echo site_url('pembayaran/kwitansi'); ?>"><button type="button" class="btn btn-primary">Cetak Kwitansi Pembayaran</button></a> <br><br> -->
<?php endif; ?>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Pesanan</th>
            <th>Kode Produk</th>
            <th>Nama Pemesan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Status</th>
            <th>Bukti</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($pembayaran as $pembayaran_item) :;
            $no++ ?>
            <tr>
                <th><?php echo $no; ?></th>
                <th><?php echo $pembayaran_item->kode_pesanan; ?></th>
                <th><?php echo $pembayaran_item->kode_produk; ?></th>
                <th><?php echo $pembayaran_item->nama_pemesan; ?></th>
                <th><?php echo $pembayaran_item->harga; ?></th>
                <th><?php echo $pembayaran_item->jumlah_pesanan; ?></th>
                <th><?php echo $pembayaran_item->total_harga; ?></th>
                <th><?php echo $pembayaran_item->status; ?></th>
                <th><?= $pembayaran_item->image != null ? '<a href="' . base_url() . $pembayaran_item->image . '" target="_blank">Link Bukti Transfer</a>' : '' ?></th>
                <th class="text-center">
                    <?php if ($this->session->userdata('jenis_pengguna') == 'admin') : ?>
                        <a href="<?php echo site_url('pembayaran/cetak_invoice/' . $pembayaran_item->kode_pembayaran); ?>" target="_blank" class="btn btn-primary" data-popup="tooltip" data-placement="top" title="Kwitansi ">Kwitansi</a>
                        <a href="<?php echo site_url('pembayaran/update/' . $pembayaran_item->kode_pembayaran); ?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data">Edit</a>
                        <a href="<?php echo site_url('pembayaran/delete/' . $pembayaran_item->kode_pembayaran); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">Hapus</a>
                    <?php elseif ($this->session->userdata('jenis_pengguna') == 'pelanggan') : ?>
                        <a href="<?php echo site_url('pembayaran/tambah/' . $pembayaran_item->kode_pesanan); ?>" class="btn btn-primary btn-circle" data-popup="tooltip" data-placement="top" title="Pembayaran">Bayar</a>
                        <a href="<?php echo site_url('pembayaran/cetak_invoice/' . $pembayaran_item->kode_pembayaran); ?>" target="_blank" class="btn btn-primary" data-popup="tooltip" data-placement="top" title="Kwitansi ">Kwitansi</a>
                    <?php endif ?>
                    </div>
                </th>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Kode Pesanan</th>
            <th>Kode Produk</th>
            <th>Nama Pemesan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Status</th>
            <th>Bukti</th>
            <th class="text-center">Aksi</th>
        </tr>
    </tfoot>
</table>