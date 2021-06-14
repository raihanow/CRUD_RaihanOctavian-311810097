<?php 
	require 'koneksi.php';
		$customer = customer("SELECT * FROM customer");
		$penjual = penjual("SELECT * FROM penjual");
		$inner_join = inner_join("SELECT * FROM customer");
		$outer_join = outer_join("SELECT * FROM penjual");

		if(isset($_POST['tambah'])) {
		 		if(tambah_customer($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	}

		if(isset($_POST['tambah'])) {
		 		if(tambah_penjual($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	} 	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas Inner Join</title>
 </head>
 <body>

 	<h3>TABLE CUSTOMER (mysqli_fetch_array)</h3>

<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		
 			<tr>
 				<td>
 					<input type="text" name="no_pesanan" placeholder="masukan nomer pesanan.." required>
 				</td>
 				<td>
 					<input type="text" name="nama_penerima" placeholder="masukan nama.." required>
 				</td>
 				<td>
 					<input type="date" name="tanggal" required>
 				</td>
 				<td>
 					<input type="text" name="nama_barang" placeholder="masukan nama barang.." required>
 				</td>
 				<td>
 					<input type="text" name="alamat" placeholder="masukan alamat.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah">Tambah Data</button>
 				</td>
 			</tr>
 
 	</form>

<!-- TABLE CUSTOMER -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA PENERIMA</th>
 			<th>TANGGAL</th>
 			<th>NAMA BARANG</th>
 			<th>ALAMAT</th>
 			<th>Aksi</th>
 		</tr>

 	<?php foreach ($customer as $b) : ?>

 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_penerima"]?></td>
 			<td><?= $b["tanggal"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["alamat"]?></td>
 			<td>
		 			<a href="edit.php?no_pesanan=<?= $b['no_pesanan']; ?>">Edit |</a>
		 			<a href="hapus.php?no_pesanan=<?= $b['no_pesanan']; ?>" onclick='return confirm("Menghapus data?");'>Delete</a>
		 		</td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE PENJUAL (mysqli_fetch_array)</h3>

 	<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		<table border="0">
 			<tr>
 				<td>
 					<input type="text" name="no_pesanan" placeholder="masukan nomer pesanan.." required>
 				</td>
 				<td>
 					<input type="text" name="nama_barang" placeholder="masukan nama barang.." required>
 				</td>
 				<td>
 					<input type="text" name="harga" placeholder="masukan harga.." required>
 				</td>
 				<td>
 					<input type="number" name="qty" placeholder="masukan jumlah.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah">Tambah Data</button>
 				</td>
 			</tr>
 		</table>
 	</form> 		

<!-- TABLE PENJUAL -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA BARANG</th>
 			<th>HARGA</th>
 			<th>QTY</th>
 		</tr>

 	<?php foreach ($penjual as $b) : ?>
 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["harga"]?></td>
 			<td><?= $b["qty"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 	<h3>TABLE INNER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA PENERIMA</th>
 			<th>TANGGAL</th>
 			<th>NAMA BARANG</th>
 			<th>ALAMAT</th>
 		</tr>

 	<?php foreach ($inner_join as $b) : ?>

 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_penerima"]?></td>
 			<td><?= $b["tanggal"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["alamat"]?></td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE LEFT OUTER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>NO PESANAN</th>
 			<th>NAMA BARANG</th>
 			<th>HARGA</th>
 			<th>QTY</th>
 		</tr>

 	<?php foreach ($outer_join as $b) : ?>
 		<tr>
 			<td><?= $b["no_pesanan"]?></td>
 			<td><?= $b["nama_barang"]?></td>
 			<td><?= $b["harga"]?></td>
 			<td><?= $b["qty"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 
 </body>
 </html> 