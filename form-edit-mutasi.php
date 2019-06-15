			<?php
			include 'koneksi.php';
			$no=$_GET['id'];
			$query=mysqli_query($koneksi,"SELECT * from mutasi, pegawai  WHERE mutasi.id_mut='$no' and mutasi.no_peg=pegawai.no_peg"); 
			while ($data=mysqli_fetch_array($query)) {
				$no_peg=$data['no_peg'];
				$nama=$data['nama'];
				$tgl_mutasi=explode('-',$data['tgl_mutasi']);
				$tm_mutasi=$data['tm_mutasi'];				
				} ?>

			<form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" action="proses_edit_mutasi.php" method="post">
			<div class="form-group">
				<label for="nama" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" id="no_peg" name="id" value="<?php echo $no;?>" readonly>
					<input type="hidden" class="form-control" id="no_peg" name="no_peg" value="<?php echo $no_peg;?>" readonly>
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>" readonly>
				</div>
			</div>

			<div class="form-group">
				<label for="tgl_cuti" class="col-sm-4 control-label">Tanggal mutasi</label>
				<div class="col-sm-8">
					<div class="input-group date">
					    	<div class="input-group-addon">
					           <span class="glyphicon glyphicon-th"></span>
					       </div>
					       <input type="text" class="form-control datepicker" name="tgl_mutasi" 
					       value="<?php echo $tgl_mutasi[2]."-".$tgl_mutasi[1]."-".$tgl_mutasi[0];?>" readonly>
					   </div>
				</div>
			</div>


			<div class="form-group">
				<label for="lama_cuti" class="col-sm-4 control-label">Tempat Mutasi</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tm_mutasi" name="tm_mutasi" value="<?php echo $tm_mutasi;?>">
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