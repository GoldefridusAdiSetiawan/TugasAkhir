<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
	$no_peg = $_POST['no_peg'];
	$tgl= explode('-',$_POST['tgl_pensiun']);
	$tgl_pensiun= $tgl[2]."-".$tgl[1]."-".$tgl[0];
	$stl = $_POST['stl'];

 
	// menginput data ke database
	mysqli_query($koneksi,"insert into pensiun values('','$no_peg','$tgl_pensiun','$stl')");
	 
	// // mengalihkan halaman kembali ke index.php
	header("location:pensiun_tampil.php");
 
?>