<?php

	// 1. Koneksi
	include("koneksi.php");

	// 2. data dari form
	$id = $_POST['id'];
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$kategori = $_POST['kategori'];

	// 3. Query
	$query = "UPDATE kontak SET nama='$nama', hp='$phone', email='$email', id_kategori='$kategori' 
			  WHERE id_kontak=$id";
	mysqli_query($db, $query);

	header('Location: index.php');
?>