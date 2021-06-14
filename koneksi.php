<?php 

	$conn = mysqli_connect("localhost","root","","raihan_311810097");

	function customer($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function penjual($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function inner_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function outer_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}


	function tambah_customer($data) {
		global $conn;

			$pesanan = htmlspecialchars($data['no_pesanan']);
			$penerima = htmlspecialchars($data['nama_penerima']);
			$tanggal = htmlspecialchars($data['tanggal']);
			$barang = htmlspecialchars($data['nama_barang']);
			$alamat = htmlspecialchars($data['alamat']);

				$query = "INSERT INTO customer VALUES
					('$pesanan','$penerima','$tanggal','$barang','$alamat')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function tambah_penjual($data) {
		global $conn;

			$pesanan = htmlspecialchars($data['no_pesanan']);
			$barang = htmlspecialchars($data['nama_barang']);
			$harga = htmlspecialchars($data['harga']);
			$qty = htmlspecialchars($data['qty']);

				$query = "INSERT INTO penjual VALUES
					('$pesanan','$barang','$harga','$qty')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function edit($data) {
		global $conn;

			$no_pesanan = htmlspecialchars($data['no_pesanan']);
			$nama_penerima = htmlspecialchars($data['nama_penerima']);
			$tanggal = htmlspecialchars($data['tanggal']);
			$nama_barang = htmlspecialchars($data['nama_barang']);
			$alamat = htmlspecialchars($data['alamat']);

				$query = "UPDATE customer SET
							no_pesanan = '$no_pesanan',
							nama_penerima = '$nama_penerima',
							tanggal = '$tanggal',
							nama_barang = '$nama_barang',
							alamat = '$alamat'
						WHERE no_pesanan = $no_pesanan";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function hapus($no_pesanan) {
			global $conn;
				$query = "DELETE FROM customer WHERE no_pesanan = $no_pesanan";
				mysqli_query($conn, $query);
				return mysqli_affected_rows($conn);
		}
 ?>