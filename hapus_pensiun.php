<?php
	include'koneksi.php';
	$id=$_GET['id'];
	$delete=mysqli_query($koneksi,"delete from pensiun where id_pen='$id'");
	header("location:pensiun_tampil.php");
?>