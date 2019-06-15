<?php
	// koneksi database
	include 'koneksi.php';
 	// menangkap data yang di kirim dari form
 	$no=$_POST['id'];
	$no_peg = $_POST['no_peg'];
	$nama = $_POST['nama'];
	
	
	$jk = $_POST['jk'];
	$tp_lahir= $_POST['tp_lahir'];
	
	$tgl_l= explode('-',$_POST['tgl_lahir']);
	$tgl_lahir= $tgl_l[2]."-".$tgl_l[1]."-".$tgl_l[0];
	//echo $tgl_lahir;
	$st_peg= $_POST['st_peg'];
	$gol= $_POST['gol'];

	$thn_g= explode('-',$_POST['thn_gol']);
	$thn_gol= $thn_g[2]."-".$thn_g[1]."-".$thn_g[0];

	$j_pend= $_POST['j_pend'];
	$thn_lulus= $_POST['thn_lulus'];
	$tgs_1= $_POST['tgs_1'];
	$id_jab= $_POST['id_jab'];

 
	// menginput data ke database
	$edit="UPDATE pegawai SET no_peg='$no_peg', nama='$nama',  jk='$jk', tp_lahir='$tp_lahir',tgl_lahir='$tgl_lahir',st_peg='$st_peg',
	gol='$gol', thn_gol='$thn_gol', j_pend='$j_pend', thn_lulus='$thn_lulus', tgs_1='$tgs_1', id_jab='$id_jab' Where no_peg='$no'";
	mysqli_query($koneksi,$edit) or die ("Gagal Perintah SQL".mysql_error());
	 
	// // mengalihkan halaman kembali ke index.php
	header("location:pegawai_tampil.php");
 
?>