<?php 
include 'cek_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
		<title>Lihat Data Mutasi</title>
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
			<h3 class="text-center">Data Mutasi</h3>
		</div>
		<hr>

            <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-primary">
			  <div class="panel-body">
		       <div class="table">
                <table class="table table-hover table-bordered" id="cobatabel">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Nama</th>
							<th>No. Pegawai</th>
							<th>Tanggal Mutasi</th>
							<th>Tempat Mutasi</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Status Pegawai</th>							
							<th>Golongan</th>
							<th>Jabatan</th>							
							<th>Aksi</th>                                           
						</tr>
					</thead>
					<tbody>
						<?php
							include 'koneksi.php';
							$query=mysqli_query($koneksi,"select * from mutasi,pegawai,Jabatan where mutasi.no_peg=pegawai.no_peg and pegawai.id_jab=Jabatan.id_jab");
							$i=1;
							while ($data=mysqli_fetch_array($query)) 
							{ $tgl= explode('-',$data['tgl_mutasi']);
								$tgl1= explode('-', $data['tgl_lahir']);
						?>
							<tr align="left">
							   	<td align="left"> <?php echo $i++; ?> </td>
								<td><?php echo $data["nama"]; ?> </td>
								<td><?php echo $data["no_peg"]; ?> </td>
								<td><?php echo $tgl[2]."-".$tgl[1]."-".$tgl[0]; ?> </td>
								<td><?php echo $data["tm_mutasi"]; ?> </td>
								<td><?php echo $data["jk"]; ?> </td>
								<td><?php echo $data["tp_lahir"]; ?> </td>
								<td><?php echo $tgl1[2]."-".$tgl1[1]."-".$tgl1[0];?> </td>
								<td><?php echo $data["st_peg"]; ?> </td>
								<td><?php echo $data["gol"]; ?> </td>
								<td><?php echo $data["jab"]; ?> </td>
								<td bgcolor="#FFFFFF">  <a href="edit_mutasi.php?id=<?php echo $data['id_mut']; ?>" class="ubah">Edit</a> || 
									<a href="hapus_mutasi.php?id=<?php echo $data['id_mut']; ?>" class="hapus">Hapus</a>
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
		<?php include 'sk_alert.php';?>
		<?php include 'sk_datatables.php';?>
		<?php include 'modal_bp.php';?>
		<?php include 'skrip-pesan.php';?>	
	</body>	
</html>