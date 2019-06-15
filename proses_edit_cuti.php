<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
 	$id = $_POST['id'];
	$no_peg = $_POST['no_peg'];
	$tgl= explode('-',$_POST['tgl_cuti']);
	$tgl_cuti= $tgl[2]."-".$tgl[1]."-".$tgl[0];
	$lama_cuti = $_POST['lama_cuti'];
	$jns_cuti = $_POST['jns_cuti'];

 
	// menginput data ke database
	$edit="UPDATE cuti Set no_peg='$no_peg', tgl_cuti='$tgl_cuti', lama_cuti='$lama_cuti', jns_cuti='$jns_cuti' where id_cuti='$id'";
	mysqli_query($koneksi,$edit);
	 
	// // mengalihkan halaman kembali ke index.php
	header("location:cuti_tampil.php");
 
?>