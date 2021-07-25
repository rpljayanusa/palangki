<!DOCTYPE>
<html>
<head>
	<title>Plang-Q Sport</title>
	<style type="text/css">
		table, th, td {
		    border: 1px solid black;
		}
		th {
			text-align: center;
		}
		h3 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h3 class="center">Laporan Pelanggan Palangki Sport</h3>
	<p><?php echo "Tanggal: ".$newDate = date("d-m-Y", strtotime($tanggal->tanggal)); ?></p>
    <table width="100%">
	    <thead>
	    <tr>
          <th>No</th>
          <th>ID Pelanggan</th>
	      <th>Alamat</th>
	      <th>Nama</th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php $no=1; foreach($pengguna as $pengguna_item): ?>
	    <tr>
	      <th><?php echo $no++; ?></th>
	      <th><?php echo $pengguna_item->kode_pengguna; ?></th>
	      <th><?php echo $pengguna_item->alamat; ?></th>
	      <th><?php echo $pengguna_item->nama_pengguna; ?></th>
	    </tr>
	    <?php endforeach; ?>
	    </tbody>
	  </table>
</body>
</html>