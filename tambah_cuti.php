<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
	$no_peg = $_POST['no_peg'];
	$tgl= explode('-',$_POST['tgl_cuti']);
	$tgl_cuti= $tgl[2]."-".$tgl[1]."-".$tgl[0];
	$lama_cuti = $_POST['lama_cuti'];
	$jns_cuti = $_POST['jns_cuti'];

 
	// menginput data ke database
	mysqli_query($koneksi,"insert into cuti values('','$no_peg','$tgl_cuti','$lama_cuti','$jns_cuti')");
	 
	// // mengalihkan halaman kembali ke index.php
	header("location:cuti_tampil.php");
 
?>