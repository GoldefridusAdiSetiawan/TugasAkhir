<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
 	$id = $_POST['id'];
	$no_peg = $_POST['no_peg'];
	$tgl= explode('-',$_POST['tgl_pensiun']);
	$tgl_pensiun= $tgl[2]."-".$tgl[1]."-".$tgl[0];
	$stl = $_POST['stl'];

 
	// menginput data ke database
	$edit="UPDATE pensiun Set no_peg='$no_peg', tgl_pensiun='$tgl_pensiun', stl='$stl' where id_pen='$id'";
	mysqli_query($koneksi,$edit);
	 
	// // mengalihkan halaman kembali ke index.php
	header("location:pensiun_tampil.php");
 
?>