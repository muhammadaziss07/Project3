<?php

	// 1. Koneksi
	include("koneksi.php");
	
	// 2. data dari form
	$id = $_POST['id'];
	$ket = mysqli_real_escape_string($db, $_POST['ket']);

	// 3. Query
	$query = "UPDATE kategori 
			  SET keterangan = '$ket' 
			  WHERE id_kategori = $id";
	mysqli_query($db, $query);

	header('Location: kategori.php')
?>