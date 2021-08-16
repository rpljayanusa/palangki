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
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $total = 0;
        foreach ($data as $row) {
            $total = $total + $row->total_harga;
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
            </tr>
        <?php $no++;
        } ?>
        <tr>
            <th colspan="7" align="right">Total</th>
            <th align="right"><?= rupiah($total) ?></th>
        </tr>
    </tbody>
</table>