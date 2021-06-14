<?php 	
		require 'koneksi.php';
		
		$no_pesanan = $_GET['no_pesanan'];

			if(hapus($no_pesanan)) {
				echo "<script>
							alert('Data berhasil dihapus');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal dihapus');
							document.location.href='index.php';
						  </script>";
				}
 ?>