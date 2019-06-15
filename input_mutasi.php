<?php 
include 'cek_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
		<title>Input Data Mutasi</title>		
	</head>

	<body>
		<!--div class="container"-->
		<nav class= "navbar navbar-inverse">
			<?php include 'navbar-header.php';?>
			<!-- navbar pilihan -->
			<div class="collapse navbar-collapse" id="target-list">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Input Data<b class="caret"></b></a>
						<?php include 'list-input.php';?>
					</li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lihat Data<b class="caret"></b></a>
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
			<h3 class="text-center">Input Data Mutasi</h3>
		</div>
		<hr>

		<form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" action="tambah_mutasi.php" method="post">
			<div class="form-group">
				<label for="nama" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<select class="form-control" id="nama" name="no_peg" readonly>
					    <?php
							include 'koneksi.php';
							$coba="SELECT * FROM pegawai WHERE NOT EXISTS (SELECT * FROM pensiun WHERE pensiun.no_peg = pegawai.no_peg) And NOT EXISTS (SELECT * FROM mutasi WHERE mutasi.no_peg = pegawai.no_peg)";
							$query=mysqli_query($koneksi,$coba);
							while ($data=mysqli_fetch_array($query)) { 
								echo '<option value="'.$data['no_peg'].'" selected>'.$data['nama'].'</option>';
									} 
							echo '<option selected style="display:none">Pilih Pegawai</option>';
						?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="tgl_mutasi" class="col-sm-4 control-label">Tanggal Mutasi</label>
				<div class="col-sm-8">
					<div class="input-group date">
					    	<div class="input-group-addon">
					           <span class="glyphicon glyphicon-th"></span>
					       </div>
					       <input placeholder="Tanggal Mutasi" type="text" class="form-control datepicker" name="tgl_mutasi" readonly>
					   </div>
				</div>
			</div>


			<div class="form-group">
				<label for="tm_mutasi" class="col-sm-4 control-label">Tempat Mutasi</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tm_mutasi" name="tm_mutasi" placeholder="Nama Sekolah">
				</div>
			</div>			
			
			<hr>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4 col-xs-4 col-xs-offset-4">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				<div class="col-sm-2 col-xs-4">
					<button type="submit" class="btn btn-danger">Batal</button>
				</div>
			</div>			
			<hr>
		</form>			


		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<?php include 'sk_datepicker.php';?>
		<?php include 'modal_bp.php';?>
		<?php include 'skrip-pesan.php';?>
	</body>	
</html>