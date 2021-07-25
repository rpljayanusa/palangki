<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cetak Kwitansi</title>
	<style>
        * {
            font-family: "open sans", tahoma, sans-serif;
            margin-left: auto;
            margin-right: auto;
        }

        .tabel-header,
        .tabel-data,
        .tabel-footer {
            width: 100%;

        }

        .tabel-header td,
        .tabel-footer td {
            font-size: 11pt;
        }

        .tabel-header td.tabel-header-title {
            font-size: 14pt;
            font-weight: bold;
            text-align: center;
            padding: 10px 0 10px 0;
        }

        .tabel-data {
            margin-top: 10px;
            color: #232323;
            border-collapse: collapse;
        }

        .tabel-data,
        .tabel-data th,
        .tabel-data td {
            font-size: 11pt;
            border: 1px solid #000;
            padding: 5px 5px;
        }

        .tabel-footer {
            margin-top: 10px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
	<table class="tabel-header" style="padding-bottom: 15px;">
        <tbody>
            <tr>
                <td style="font-size: 14pt;font-family: Arial;text-align: center;font-weight:bolder;">Kwitansi</td>
            </tr>
        </tbody>
    </table>
    <table class="tabel-header" style="padding-bottom: 5px; margin-bottom: 15px;">
	    <tr>
	        <td>Tanggal : <?= date_indo($row['tanggal'])?></td>
	    </tr>
	    <tr>
	        <td>Nama Pemesan : <?= $row['nama_pemesan']?></td>
	    </tr>
	</table>
	<table class="tabel-data">
		<thead>
		    <tr>
		    	<th>No</th>
	          	<th>Produk</th>
		      	<th>Jumlah</th>
		      	<th>Harga</th>
		    </tr>
	    </thead>
	    <tbody>
	    	<?php $no=1;
	    	foreach ($result as $r) { ?>
	    		<tr>
	    			<td align="center"><?= $no . '.' ?></td>
	    			<td><?= $r['nama_produk']?></td>
	    			<td align="center"><?= $r['jumlah_pesanan']?></td>
	    			<td align="right"><?= rupiah($r['harga']) ?></td>
	    		</tr>
	    	<?php $no++; }?>
	    </tbody>
	</table>
</body>
</html>