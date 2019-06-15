<?php 
include 'cek_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>			
		<?php include 'head.php';?>
		<title>Input Data Pegawai</title>		
	</head>

	<body>		
		<!-- header navbar -->
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
			<h3 class="text-center">Input Data Pegawai</h3>
		</div>
		<hr>

		<form class="form-horizontal col-sm-4 col-sm-offset-4" enctype="multipart/form-data" role="form" action="tambah_pegawai.php" method="post">
			<div class="form-group">
				<label for="no_peg" class="col-sm-4 control-label">No. Pegawai</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="no_peg" id="no_peg" placeholder="Isikan Nomor Pegawai">
				</div>
			</div>
			<div class="form-group">
				<label for="nama" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Isikan Nama">
				</div>
			</div>

			<div class="form-group">
				<label for="jk" class="col-sm-4 control-label">Jenis Kelamin</label>
				<div class="col-sm-8">
					<div class="form-check col-sm-6">
					  <input class="form-check-input" type="radio" name="jk" id="Laki-laki" value="Laki-laki" checked>
					  <label class="form-check-label" for="laki-laki">
					    Laki-laki
					  </label>
					</div>
					<div class="form-check col-sm-6">
					  <input class="form-check-input" type="radio" name="jk" id="Perempuan" value="Perempuan">
					  <label class="form-check-label" for="perempuan">
					    Perempuan
					  </label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="tp_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tp_lahir" name="tp_lahir" placeholder="Tempat Lahir">
				</div>
			</div>

			<div class="form-group">
				<label for="tgl_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
				<div class="col-sm-8">
					<div class="input-group date">
					    	<div class="input-group-addon">
					           <span class="glyphicon glyphicon-th"></span>
					       </div>
					       <input placeholder="Tanggal Lahir" type="text" class="form-control datepicker" name="tgl_lahir" readonly>
					   </div>
				</div>
			</div>
			<div class="form-group">
				<label for="st_peg" class="col-sm-4 control-label">Status Pegawai</label>
				<div class="col-sm-8">
					<div class="form-check col-sm-4">
					  <input class="form-check-input" type="radio" name="st_peg" id="PNS" value="PNS" checked>
					  <label class="form-check-label" for="PNS">
					    PNS
					  </label>
					</div>
					<div class="form-check col-sm-4">
					  <input class="form-check-input" type="radio" name="st_peg" id="GTT" value="GTT">
					  <label class="form-check-label" for="GTT">
					    GTT
					  </label>
					</div>
					<div class="form-check col-sm-4">
					  <input class="form-check-input" type="radio" name="st_peg" id="PTT" value="PTT">
					  <label class="form-check-label" for="PTT">
					    PTT
					  </label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="gol" class="col-sm-4 control-label">Golongan</label>
				<div class="col-sm-8">
					<select class="form-control" id="gol" name="gol">
					    <option selected style="display:none">Pilih Golongan</option>
					    <option value="IA">IA</option>
					    <option value="IB">IB</option>
					    <option value="IC">IC</option>
					    <option value="ID">ID</option>
					    <option value="IIA">IIA</option>
					    <option value="IIB">IIB</option>
					    <option value="IIC">IIC</option>
					    <option value="IID">IID</option>
					    <option value="IIIA">IIIA</option>
					    <option value="IIIB">IIIB</option>
					    <option value="IIIC">IIIC</option>
					    <option value="IIID">IIID</option>
					    <option value="IVA">IVA</option>
					    <option value="IVB">IVB</option>
					    <option value="IVC">IVC</option>
					    <option value="IVD">IVD</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="thn_gol" class="col-sm-4 control-label">Tahun Golongan Terakhir</label>
				<div class="col-sm-8">
					<div class="input-group date">
					    	<div class="input-group-addon">
					           <span class="glyphicon glyphicon-th"></span>
					       </div>
					       <input placeholder="Tahun Golongan Terakhir" type="text" class="form-control datepicker" name="thn_gol" readonly>
					   </div>
				</div>
			</div>

			<div class="form-group">
				<label for="j_pend" class="col-sm-4 control-label">Jenjang Pendidikan</label>
				<div class="col-sm-8">
					<select class="form-control" id="j_pend" name="j_pend">
					    <option selected style="display:none">Pilih Jenjang Pendidikan</option>
					    <option value="SMA/SMK">SMA/SMK</option>
					    <option value="D3">D3</option>
					    <option value="S1">S1</option>
					    <option value="S2">S2</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="thn_lulus" class="col-sm-4 control-label">Tahun Lulus</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="thn_lulus" name="thn_lulus" placeholder="Tahun Lulus Pendidikan">
				</div>
			</div>

			<div class="form-group">
				<label for="tgs_1" class="col-sm-4 control-label">Tugas 1</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tgs_1" name="tgs_1" placeholder="Tugas 1">
				</div>
			</div>

			<div class="form-group">
				<label for="jab" class="col-sm-4 control-label">Tugas 2 (Jabatan)</label>
				<div class="col-sm-8">
					<select class="form-control" id="id_jab" name="id_jab">
					    
					    <?php
							include 'koneksi.php';

							$query=mysqli_query($koneksi,"select id_jab,jab from jabatan");
							while ($data=mysqli_fetch_array($query)) { 
								echo '<option value="'.$data['id_jab'].'" selected>'.$data['jab'].'</option>';
									} 
							echo '<option selected style="display:none">Pilih Jabatan</option>';
						?>
					</select>
				</div>
			</div>

			<hr>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4 col-xs-4 col-xs-offset-4">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				<div class="col-sm-2 col-xs-4">
					<button type="reset" class="btn btn-danger">Reset</button>
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