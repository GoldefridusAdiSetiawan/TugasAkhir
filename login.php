<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	echo"sesion aktif";
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['tanggal']=date('Y-m-d');
	date_default_timezone_set('Australia/Perth');
	$_SESSION['jam']=date('H:i:s');

	// $tanggal=$_SESSION['tanggal'];
	header("location:index.php");
}
else{	
	header("location:login.html?gagal");	
}
 
?>