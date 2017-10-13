<?php  //filename: delete_kategori.php

	//1. koneksi
	include("koneksi.php");

	$id = $_GET['id'];
	
	// 2. Query
	$query = "DELETE FROM kategori WHERE id_kategori=$id";
	mysqli_query($db, $query);

	header('Location: kategori.php')
?>