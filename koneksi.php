<?php
	$koneksi=mysqli_connect("localhost","root","","simpeg");
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal ". mysqli_connect_error();
	}
?>