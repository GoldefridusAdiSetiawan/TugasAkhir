<?php 
include 'cek_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
		<title>Pesan Pengingat</title>	
	</head>

	<body>
		<!--div class="container"-->
		<nav class= "navbar navbar-inverse">
			<?php include 'navbar-header.php';?>
			<!-- navbar pilihan -->
			<div class="collapse navbar-collapse" id="target-list">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Input Data<b class="caret"></b></a>
						<?php include 'list-input.php';?>
					</li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lihat Data<b class="caret"></b></a>
						<?php include 'list-lihat.php';?>
					</li>
					<li><a href="#">Laporan</a></li>
					<li id="header_inbox_bar" class="dropdown active">
						<?php include 'list-pesan.php';?>
				    </li>
				</ul>
				<?php include 'list-tambahan.php';?>
			</div>
		</nav>

		<div class="contain">
			<h3 class="text-center">Pesan Pengingat</h3>
		</div>
		<hr>
            <div class="col-md-10 col-md-offset-1">
				</br>
		                <div class="table">
                                <table class="table table-hover table-bordered" id="cobatabel">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul atau perihal</th>
                                            <th>Isi Pesan</th>
                                            <th>Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                              <?php
									include 'koneksi.php';
									$query=mysqli_query($koneksi,"select * from pesan order by id_pesan desc ");
									$i=1;
								while ($data=mysqli_fetch_array($query)) 
								{	?>
									<tr align="left">
									   	<td align="left"> <?php echo $i++; ?> </td>
										<td><a href="#" class="<?php if ($data['st_p']=='1') echo 'baca';?>"
											data-toggle="modal" data-target="#show" data-id="<?php echo $data["id_pesan"]; ?>"><?php echo $data["judul"]; ?></a> </td>
										<td><?php echo $data["isi"]; ?> </td>
										<td><?php echo $data["waktu"]; ?> </td>
										<td><a href="hapus_pesan.php?id=<?php echo $data['id_pesan']; ?>" class="hapus">Hapus</a>
										</td>
									</tr> 
							<?php } ?> 
                                    </tbody>
                                </table>                    
                    </div>
				</div>		
		

		<!-- script bawaan-->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- script datatables-->
		<?php include 'sk_datatablespesan.php';?>
		<?php include 'sk_alert.php';?>
		<?php include 'modal_bp.php';?>
		<?php include 'skrip-pesan.php';?>	
	</body>	
</html>