<table class="tabel-data">
    <thead>
        <tr>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Jenis Produk</th>
            <th>Stok Produk</th>
            <th>Harga Produk</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
    	<?php
    	$total = 0;
    	foreach ($data as $row) {
    		$subotal = $row->jumlah_produk * $row->harga_produk;
    		$total = $total + $subotal;
    	?>
    	<tr>
    		<td align="center"><?= $row->kode_produk ?></td>
    		<td><?= $row->nama_produk ?></td>
            <td><?= $row->jenis_produk ?></td>
    		<td align="right"><?= $row->jumlah_produk ?></td>
    		<td align="right"><?= rupiah($row->harga_produk) ?></td>
    		<td align="right"><?= rupiah($subotal) ?></td>
    	</tr>
    	<?php }?>
    	<tr>
    		<th colspan="5" align="right">Total</th>
    		<th align="right"><?= rupiah($total)?></th>
    	</tr>
    </tbody>
</table>