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
	<p><?php echo "Tanggal: ".$newDate = date("d-m-Y", strtotime($tanggal->tanggal)); ?></p>
    <table width="100%">
	    <thead>
	    <tr>
          <th>No</th>
          <th>Kode Pesanan</th>
	      <th>Kode Produk</th>
	      <th>Nama Produk</th>
		  <th>Tanggal Pesan</th>
	      <th>Jumlah</th>
	      <th>Total</th>
		  <th>Status</th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php $no=1; foreach($pembayaran as $pembayaran_item): ?>
	    <tr>
	      <th><?php echo $no++; ?></th>
	      <th><?php echo $pembayaran_item->kode_pesanan; ?></th>
	      <th><?php echo $pembayaran_item->kode_produk; ?></th>
	      <th><?php echo $pembayaran_item->nama_produk; ?></th>
		  <th><?php echo $pembayaran_item->tanggal; ?></th>
	      <th><?php echo $pembayaran_item->jumlah_pesanan; ?></th>
	      <th><?php echo $pembayaran_item->total_harga; ?></th>
		  <th><?php echo $pembayaran_item->status; ?></th>
	    </tr>
	    <?php endforeach; ?>
	    </tbody>
	  </table>
</body>
</html>