<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$delete=mysqli_query($koneksi,"delete from pesan where id_pesan='$id'");
	header("location:pesan2.php");
?>