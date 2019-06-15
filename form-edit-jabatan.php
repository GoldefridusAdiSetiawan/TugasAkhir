			<?php
			include 'koneksi.php';
			$no=$_GET['id'];
			$query=mysqli_query($koneksi,"SELECT * from jabatan  WHERE jabatan.id_jab='$no'"); 
			while ($data=mysqli_fetch_array($query)) {
				$id_jab=$data['id_jab'];
				$jab=$data['jab'];
				} ?>

			<form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" action="proses_edit_jab.php" method="post">
			<div class="form-group">
				<label for="nama" class="col-sm-4 control-label">Nama Jabatan</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" id="id_jab" name="id_jab" value="<?php echo $id_jab;?>" readonly>
					<input type="text" class="form-control" id="jab" name="jab" value="<?php echo $jab;?>">
				</div>
			</div>

			
			<hr>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4 col-xs-4 col-xs-offset-4">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				<div class="col-sm-2 col-xs-4">
					<button type="reset" class="btn btn-danger">Batal</button>
				</div>
			</div>			
			<hr>
			</form>			