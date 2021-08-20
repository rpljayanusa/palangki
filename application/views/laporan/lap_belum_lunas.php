<table class="tabel-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Pesanan</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Tanggal Pesan</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Total</th>
            <th>Sisa Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $total = 0;
        $total_sisa = 0;
        foreach ($data as $row) {
            $total = $total + $row->total_harga;
            $idpesan = $row->kode_pesanan;
            $jumlah_bayar = $this->db->query("SELECT SUM(jumlah_bayar) AS total FROM pembayaran WHERE kode_pesanan='$idpesan'")->row();
            $total_sisa = $total_sisa + $row->total_harga - $jumlah_bayar->total;
        ?>
            <tr>
                <td align="center"><?= $no . '.' ?></td>
                <td align="center"><?= $row->kode_pesanan ?></td>
                <td align="center"><?= $row->kode_produk ?></td>
                <td><?= $row->nama_produk ?></td>
                <td><?= $row->tanggal ?></td>
                <td align="center"><?= rupiah($row->jumlah_pesanan) ?></td>
                <td align="center"><?= $row->status ?></td>
                <td align="right"><?= rupiah($row->total_harga) ?></td>
                <td align="right"><?= rupiah($row->total_harga - $jumlah_bayar->total) ?></td>
            </tr>
        <?php $no++;
        } ?>
        <tr>
            <th colspan="7" align="right">Total</th>
            <th align="right"><?= rupiah($total) ?></th>
            <th align="right"><?= rupiah($total_sisa) ?></th>
        </tr>
    </tbody>
</table>
<table border="0" style="width: 100%; padding-top:15px;">
    <tr>
        <td width="85%"></td>
        <td style="border-bottom: none;">
            Padang, <?= format_indo(date('Y-m-d')) ?><br>
            <br><br><br><br><br><br>
            Pemilik
        </td>
    </tr>
</table>