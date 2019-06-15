<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
	$jab = $_POST['jab'];
 
	// menginput data ke database
	mysqli_query($koneksi,"insert into jabatan values('','$jab')");
	
	// // mengalihkan halaman kembali ke index.php
	header("location:jabatan_tampil.php");
 
?>