<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$delete=mysqli_query($koneksi,"delete from pegawai where no_peg='$id'");
	header("location:pegawai_tampil.php");
?>