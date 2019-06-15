<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$delete=mysqli_query($koneksi,"delete from mutasi where id_mut='$id'");
	header("location:mutasi_tampil.php");
?>