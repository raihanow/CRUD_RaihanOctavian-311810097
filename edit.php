 <?php 
	 	require 'koneksi.php';

	 	$no_pesanan = $_GET['no_pesanan'];
	 	$a = customer("SELECT * FROM customer WHERE no_pesanan = $no_pesanan")[0];

		 	if(isset($_POST['ubah'])) {
		 		if(edit($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil diubah');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal diubah');
						  </script>";
		 		}
		 	}
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>UBAH DATA</title>
 </head>
 <body>

 	<h1><u>Isi Form dibawah</u></h1>

 	<form action="" method="post">
 			<ul>
 				<li>
 					<input type="text" name="no_pesanan" id="no_pesanan" value="<?= $a['no_pesanan']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="nama_penerima" id="nama_penerima" value="<?= $a['nama_penerima']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="date" name="tanggal" id="tanggal" value="<?= $a['tanggal']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="nama_barang" id="nama_barang" value="<?= $a['nama_barang']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="alamat" id="alamat" value="<?= $a['alamat']; ?>">
 				</li>
 			</ul>
 			<button type="submit" name="ubah">Ubah Data</button>
 	</form>
 			<br>
 			<a href="index.php">Kembali</a>
 
 </body>
 </html>