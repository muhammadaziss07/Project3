<?php //filename: delete_kontak.php

	//1. koneksi
	include("koneksi.php");

	$id = $_GET['id'];
	
	// 2. Query
	$query = "DELETE FROM kontak WHERE id_kontak=$id";
	mysqli_query($db, $query);

	header('Location: index.php')
?>