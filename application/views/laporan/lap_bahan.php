<table class="tabel-data">
	<thead>
		<tr>
			<th>Kode Bahan</th>
			<th>Nama Bahan</th>
			<th>Jumlah Bahan</th>
			<th>Harga Bahan</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$total = 0;
		foreach ($data as $row) {
			$subotal = $row->jumlah_bahan * $row->harga_bahan;
			$total = $total + $subotal;
		?>
			<tr>
				<td align="center"><?= $row->kode_bahan ?></td>
				<td><?= $row->nama_bahan ?></td>
				<td align="right"><?= $row->jumlah_bahan ?></td>
				<td align="right"><?= rupiah($row->harga_bahan) ?></td>
				<td align="right"><?= rupiah($subotal) ?></td>
			</tr>
		<?php } ?>
		<tr>
			<th colspan="4" align="right">Total</th>
			<th align="right"><?= rupiah($total) ?></th>
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