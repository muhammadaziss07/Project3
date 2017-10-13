<?php //filename:proses_tambah_kontak.php

	// 1. Koneksi
	include("koneksi.php");

	// 2. Data dari form
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);

	// 3. Query
	$query = "INSERT INTO kontak(nama,hp,email,id_kategori) VALUES ('$nama','$phone','$email','".$_POST['kategori']."')";
	// Ok, take your newly create variables:
	mysqli_query($db, $query);

	header('Location:index.php');
?>