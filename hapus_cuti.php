<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$delete=mysqli_query($koneksi,"delete from cuti where id_cuti='$id'");
	header("location:cuti_tampil.php");
?>