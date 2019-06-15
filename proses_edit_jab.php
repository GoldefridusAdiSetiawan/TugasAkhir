<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
 	$id= $_POST['id_jab'];
	$jab = $_POST['jab'];
 
	// menginput data ke database
	$edit="UPDATE jabatan Set jab='$jab' where id_jab='$id'";
	mysqli_query($koneksi,$edit);
	
	// // mengalihkan halaman kembali ke index.php
	header("location:jabatan_tampil.php");
 
?>