<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
	$no_peg = $_POST['no_peg'];
	$tgl= explode('-',$_POST['tgl_mutasi']);
	$tgl_mutasi= $tgl[2]."-".$tgl[1]."-".$tgl[0];
	$tm_mutasi = $_POST['tm_mutasi'];

 
	// menginput data ke database
	mysqli_query($koneksi,"insert into mutasi values('','$no_peg','$tgl_mutasi','$tm_mutasi')");
	 
	// // mengalihkan halaman kembali ke index.php
	header("location:mutasi_tampil.php");
 
?>