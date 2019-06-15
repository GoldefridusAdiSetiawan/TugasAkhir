<?php 
include 'koneksi.php';
 
// mengaktifkan session
session_start();
$jam=$_SESSION['jam'];
$tgl_ini=new DateTime($_SESSION['tanggal']);
$tanggal=getdate();
// echo $tanggal['year'];
 // load database
 
 $query=mysqli_query($koneksi,"select nama,no_peg,tgl_lahir,thn_gol from pegawai");
 $i=0;
	while ($data=mysqli_fetch_array($query)) 
	{
		$tgl_lahir[$i]=new DateTime($data['tgl_lahir']);
		$thn_gol[$i]=new DateTime($data['thn_gol']);
		$id[$i]=$data['no_peg'];
		$nama[$i]=$data['nama'];
		
		$umur[$i]= $tgl_ini->diff($tgl_lahir[$i]);
		$cek[$i]=$umur[$i]->y;
		if ($cek[$i]=="60"){
			$judul="Pensiun";
			$isi="Pegawai bernama ".$nama[$i]." telah memasuki masa pensiun";
			$waktu=$_SESSION['tanggal'];
			// echo $waktu;
			$querycekpensiun=mysqli_query($koneksi,"select isi from pesan where isi='$isi'");
			$cekpen = mysqli_num_rows($querycekpensiun);
			if ($cekpen==0){
			mysqli_query($koneksi,"insert into pesan values('','$judul','$isi','$waktu','0')");
			}
		}
		$tgol[$i]= $tgl_ini->diff($thn_gol[$i]);
		$naik[$i]=$tgol[$i]->y;
		if ($naik[$i]=="4"){
			$judulgol="Naik Pangkat";
			$waktugol=$_SESSION['tanggal'];

			$isigol="Pegawai bernama ".$nama[$i]." pada tahun ".$tanggal['year']." layak untuk naik pangkat";			
			// echo $waktu;
			$querycekgolongan=mysqli_query($koneksi,"select isi from pesan where isi='$isigol'");
			$cekgol = mysqli_num_rows($querycekgolongan);
			if ($cekgol==0){
			mysqli_query($koneksi,"insert into pesan values('','$judulgol','$isigol','$waktugol','0')");
			}
		}
		$i++;
	}

	
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.html?logindulu");
}
 
// menampilkan pesan selamat datang
// echo "Hai, selamat datang ". $_SESSION['username'];
 
?>