			<?php
			include 'koneksi.php';
			$no=$_GET['id'];
			$query=mysqli_query($koneksi,"SELECT * from cuti, pegawai  WHERE cuti.id_cuti='$no' and cuti.no_peg=pegawai.no_peg"); 
			while ($data=mysqli_fetch_array($query)) {
				$no_peg=$data['no_peg'];
				$nama=$data['nama'];
				$tgl_cuti=explode('-',$data['tgl_cuti']);
				$lama_cuti=$data['lama_cuti'];
				$jns_cuti=$data['jns_cuti'];				
				} ?>

			<form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" action="proses_edit_cuti.php" method="post">
			<div class="form-group">
				<label for="nama" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" id="no_peg" name="id" value="<?php echo $no;?>" readonly>
					<input type="hidden" class="form-control" id="no_peg" name="no_peg" value="<?php echo $no_peg;?>" readonly>
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>" readonly>
				</div>
			</div>

			<div class="form-group">
				<label for="tgl_cuti" class="col-sm-4 control-label">Tanggal Cuti</label>
				<div class="col-sm-8">
					<div class="input-group date">
					    	<div class="input-group-addon">
					           <span class="glyphicon glyphicon-th"></span>
					       </div>
					       <input type="text" class="form-control datepicker" name="tgl_cuti" 
					       value="<?php echo $tgl_cuti[2]."-".$tgl_cuti[1]."-".$tgl_cuti[0];?>" readonly>
					   </div>
				</div>
			</div>


			<div class="form-group">
				<label for="lama_cuti" class="col-sm-4 control-label">Lama Cuti</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="lama_cuti" name="lama_cuti" value="<?php echo $lama_cuti;?>">
				</div>
			</div>
			
			
			
			<div class="form-group">
				<label for="jns_cuti" class="col-sm-4 control-label">Jenis Cuti</label>
				<div class="col-sm-8">
					<select class="form-control" id="jns_cuti" name="jns_cuti" readonly>				
					    <?php
						    if ($jns_cuti=='Cuti Tahunan'){ echo "<option value='Cuti Tahunan' selected>Cuti Tahunan</option>";}
								else {echo "<option value='Cuti Tahunan'>Cuti Tahunan</option>";}
							if ($jns_cuti=='Cuti Besar'){ echo "<option value='Cuti Besar' selected>Cuti Besar</option>";}
								else {echo "<option value='Cuti Besar'>Cuti Besar</option>";}
							if ($jns_cuti=='Cuti Sakit'){ echo "<option value='Cuti Sakit' selected>Cuti Sakit</option>";}
								else {echo "<option value='Cuti Sakit'>Cuti Sakit</option>";}
							if ($jns_cuti=='Cuti Bersalin'){ echo "<option value='Cuti Bersalin' selected>Cuti Bersalin</option>";}
								else {echo "<option value='Cuti Bersalin'>Cuti Bersalin</option>";}
							if ($jns_cuti=='Cuti Karena Alasan Penting'){ echo "<option value='Cuti Karena Alasan Penting' selected>Cuti Karena Alasan Penting</option>";}
								else {echo "<option value='Cuti Karena Alasan Penting'>Cuti Karena Alasan Penting</option>";}
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