<?php 
include 'cek_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
    	<title>Lihat Data Cuti</title>
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
			<h3 class="text-center">Data Cuti</h3>
		</div>
		<hr>

            <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-primary">
			  <div class="panel-body">
		       <div class="table">
                <table class="table table-hover table-bordered" id="cobatabel">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Nama</th>
							<th>Tanggal Cuti</th>
							<th>Lama Cuti</th>							
							<th>Jenis Cuti</th>							
							<th>Aksi</th>                                           
						</tr>
					</thead>
					<tbody>
						<?php
							include 'koneksi.php';
							$query=mysqli_query($koneksi,"select * from cuti,pegawai where cuti.no_peg=pegawai.no_peg");
							$i=1;
							while ($data=mysqli_fetch_array($query)) 
							{	$tgl= explode('-',$data['tgl_cuti']);
						?>
							<tr align="left">
							   	<td align="left"> <?php echo $i++; ?> </td>
								<td><?php echo $data["nama"]; ?> </td>
								<td><?php echo $tgl[2]."-".$tgl[1]."-".$tgl[0]; ?> </td>
								<td><?php echo $data["lama_cuti"]; ?> </td>
								<td><?php echo $data["jns_cuti"]; ?> </td>						        
								<td bgcolor="#FFFFFF">  <a href="edit_cuti.php?id=<?php echo $data['id_cuti']; ?>" class="ubah">Edit</a> || 
									<a href="hapus_cuti.php?id=<?php echo $data['id_cuti']; ?>" class="hapus">Hapus</a>
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