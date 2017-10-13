<?php //filename:proses_tambah_kategori.php

	// 1. Koneksi
	include("koneksi.php");

	// 2. Data dari form
	$ket = mysqli_real_escape_string($db, $_POST['ket']);

	// 3. Query
	$query = "INSERT INTO kategori(keterangan) VALUES ('$ket')";
	mysqli_query($db, $query);

	header('Location:kategori.php');
?>