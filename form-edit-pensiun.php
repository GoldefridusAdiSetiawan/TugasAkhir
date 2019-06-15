			<?php
			include 'koneksi.php';
			$no=$_GET['id'];
			$query=mysqli_query($koneksi,"SELECT * from pensiun, pegawai  WHERE pensiun.id_pen ='$no' and pensiun.no_peg=pegawai.no_peg"); 
			while ($data=mysqli_fetch_array($query)) {
				$no_peg=$data['no_peg'];
				$nama=$data['nama'];				
				$tgl_pensiun=explode('-',$data['tgl_pensiun']);
				$stl=$data['stl'];;				
				} ?>

			<form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" action="proses_edit_pensiun.php" method="post">
			<div class="form-group">
				<label for="nama" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $no;?>" readonly>
					<input type="hidden" class="form-control" id="no_peg" name="no_peg" value="<?php echo $no_peg;?>" readonly>
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>" readonly>
				</div>
			</div>

			<div class="form-group">
				<label for="tgl_cuti" class="col-sm-4 control-label">Tanggal Pensiun</label>
				<div class="col-sm-8">
					<div class="input-group date">
					    	<div class="input-group-addon">
					           <span class="glyphicon glyphicon-th"></span>
					       </div>
					       <input type="text" class="form-control datepicker" name="tgl_pensiun" 
					       value="<?php echo $tgl_pensiun[2]."-".$tgl_pensiun[1]."-".$tgl_pensiun[0];?>" readonly>
					   </div>
				</div>
			</div>	
			
			<div class="form-group">
				<label for="jns_cuti" class="col-sm-4 control-label">Satya Lencana</label>
				<div class="col-sm-8">
					<select class="form-control" id="stl" name="stl" readonly>				
					    <?php
						    if ($stl=='10 Tahun'){ echo "<option value='10 Tahun' selected>10 Tahun</option>";}
								else {echo "<option value='10 Tahun'>10 Tahun</option>";}
							if ($stl=='20 Tahun'){ echo "<option value='20 Tahun' selected>20 Tahun</option>";}
								else {echo "<option value='20 Tahun'>20 Tahun</option>";}
							if ($stl=='30 Tahun'){ echo "<option value='30 Tahun' selected>30 Tahun</option>";}
								else {echo "<option value='30 Tahun'>30 Tahun</option>";}
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
					<button type="reset" class="btn btn-danger">Batal</button>
				</div>
			</div>			
			<hr>
			</form>			