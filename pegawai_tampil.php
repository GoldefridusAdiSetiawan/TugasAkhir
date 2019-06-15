<?php 
include 'cek_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
		<title>Lihat Data Pegawai</title>
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
			<h3 class="text-center">Data Pegawai</h3>
		</div>
		<hr>

            <div class="col-md-10 col-md-offset-1">
             <div class="panel panel-primary">
			  <div class="panel-body">
		       <div class="table">
                <table class="table table-hover table-bordered table-responsive" id="cobatabel">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>No. Pegawai</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Status Pegawai</th>							
							<th>Golongan</th>	
							<th>Tahun Golongan Terakhir</th>
							<th>Jabatan</th>						
							<th>Tugas 1</th>
							<th>Aksi</th>                                           
						</tr>
					</thead>
					<tbody>
						<?php
							include 'koneksi.php';
							$coba="SELECT * FROM pegawai,jabatan WHERE pegawai.id_jab=jabatan.id_jab and NOT EXISTS (SELECT * FROM pensiun WHERE pensiun.no_peg = pegawai.no_peg) And NOT EXISTS (SELECT * FROM mutasi WHERE mutasi.no_peg = pegawai.no_peg)";
							$query=mysqli_query($koneksi,$coba);
							$i=1;
							while ($data=mysqli_fetch_array($query)) 
							{ $tgl= explode('-',$data['tgl_lahir']);
							  $tgl1= explode('-',$data['thn_gol']);


						?>
							<tr align="left">
							   	<td align="left"> <?php echo $i++; ?> </td>
								<td><?php echo $data["nama"]; ?> </td>
								<td><?php echo $data["no_peg"]; ?> </td>
								<td><?php echo $data["jk"]; ?> </td>
								<td><?php echo $data["tp_lahir"]; ?> </td>
								<td><?php echo $tgl[2]."-".$tgl[1]."-".$tgl[0];?> </td>
								<td><?php echo $data["st_peg"]; ?> </td>
								<td><?php echo $data["gol"]; ?> </td>
								<td><?php echo $tgl1[2]."-".$tgl1[1]."-".$tgl1[0];?> </td>
								<td><?php echo $data["jab"]; ?> </td>
								<td><?php echo $data["tgs_1"]; ?> </td>
								<td bgcolor="#FFFFFF">  <a href="edit_pegawai.php?id=<?php echo $data['no_peg']; ?>" class="ubah">Edit</a> || 
									<a href="hapus_pegawai.php?id=<?php echo $data['no_peg']; ?>" class="hapus">Hapus</a>
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