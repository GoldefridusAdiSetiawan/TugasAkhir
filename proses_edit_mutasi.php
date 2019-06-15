<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
 	$id = $_POST['id'];
	$no_peg = $_POST['no_peg'];
	$tgl= explode('-',$_POST['tgl_mutasi']);
	$tgl_mutasi= $tgl[2]."-".$tgl[1]."-".$tgl[0];
	$tm_mutasi = $_POST['tm_mutasi'];

 
	// menginput data ke database
	$edit="UPDATE mutasi Set no_peg='$no_peg', tgl_mutasi='$tgl_mutasi', tm_mutasi = '$tm_mutasi' where id_mut='$id'";
	mysqli_query($koneksi,$edit);
	// // mengalihkan halaman kembali ke index.php
	header("location:mutasi_tampil.php");
 
?>