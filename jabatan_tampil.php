<?php 
include 'cek_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
		<title>Lihat Data Jabatan</title>
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
					<li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lihat Data<b class="caret"></b></a>
					<?php include 'list-lihat.php';?>
					</li>
					<li id="header_inbox_bar" class="dropdown">
						<?php include 'list-pesan.php';?>
				    </li>
				</ul>
				<?php include 'list-tambahan.php';?>
			</div>
		</nav>

		<div class="contain">
			<h3 class="text-center">Data Jabatan</h3>
		</div>
		<hr>

            <div class="col-md-6 col-md-offset-3">
             <div class="panel panel-primary">
			  <div class="panel-body">
		       <div class="table">
                <table class="table table-hover table-bordered" id="cobatabel">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Nama Jabatan</th>
							<th>Aksi</th>                                           
						</tr>
					</thead>
					<tbody>
						<?php
							include 'koneksi.php';
							$query=mysqli_query($koneksi,"select id_jab,jab from jabatan");
							$i=1;
							while ($data=mysqli_fetch_array($query)) 
							{
						?>
							<tr align="left">
							   	<td align="left"> <?php echo $i++; ?> </td>
								<td><?php echo $data["jab"]; ?> </td>						        
								<td bgcolor="#FFFFFF">  <a href="edit_jabatan.php?id=<?php echo $data['id_jab']; ?>" class="ubah">Edit</a> || 
									<a href="hapus_jabatan.php?id=<?php echo $data['id_jab']; ?>" class="hapus">Hapus</a>
								</td>
							</tr> 
					<?php } ?> 
                    </tbody>
                 </table>
                </div>
               </div>
        	  </div>
			</div>

		<!-- script bawaan-->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- script datatables-->
		<?php include 'sk_datatables.php';?>
		<?php include 'sk_alert.php';?>
		<?php include 'modal_bp.php';?>
		<?php include 'skrip-pesan.php';?>	
	</body>	
</html>