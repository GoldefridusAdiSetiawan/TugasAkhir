<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$delete=mysqli_query($koneksi,"delete from jabatan where id_jab='$id'");
	header("location:jabatan_tampil.php");
?>