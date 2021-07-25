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
	<h3 class="center">Kwitansi</h3>
	<p>Tanggal: <?php echo "Tanggal: ".$newDate = date("d-m-Y", strtotime($pengguna->tanggal)); ?></p>
	<p>Nama Pemesan: <?php echo $this->session->userdata('username'); ?></p>
    <table width="100%">
	    <thead>
	    <tr>
          <th>No</th>
          <th>Pesanan</th>
	      <th>Jumlah</th>
	      <th>Harga</th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php $no=1; foreach($pemesanan as $pemesanan_item): ?>
	    <tr>
	      <th><?php echo $no++; ?></th>
	      <th><?php echo $pemesanan_item->nama_produk; ?></th>
	      <th><?php echo $pemesanan_item->jumlah_pesanan; ?></th>
	      <th><?php echo $pemesanan_item->total_harga; ?></th>
	    </tr>
	    <?php endforeach; ?>
		<tr>
			<th colspan="3">Total</th>
			<th>
				<?php 
					$total = 0; 
					foreach($pemesanan as $pemesanan_item){
						$total += $pemesanan_item->total_harga;
					}
					echo $total; 
				?>
			</th>
		</tr>
	    </tbody>
	  </table>
</body>
</html>