			<?php
			include 'koneksi.php';
			$no=$_GET['id'];
			$query=mysqli_query($koneksi,"select * from pegawai, jabatan WHERE pegawai.no_peg='$no' and pegawai.id_jab=jabatan.id_jab"); 
			while ($data=mysqli_fetch_array($query)) {
				$no_peg=$data['no_peg'];
				$nama=$data['nama'];
				$jk=$data['jk'];
				$tp_lahir=$data['tp_lahir'];
				$tgl_lahir=explode('-',$data['tgl_lahir']);
				$st_peg=$data['st_peg'];
				$gol=$data['gol'];
				$thn_gol=explode('-',$data['thn_gol']);
				$j_pend=$data['j_pend'];
				$thn_lulus=$data['thn_lulus'];
				$tgs_1=$data['tgs_1'];
				$id_jab=$data['id_jab'];
				} ?>

			<form class="form-horizontal" enctype="multipart/form-data" role="form" action="proses_edit_pegawai.php" method="post">
			
			
			

			<div class="col-sm-4 col-sm-offset-4">
			
			<div class="form-group">
				<label for="no_peg" class="col-sm-4 control-label">No. Pegawai</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" name="id" id="id" value="<?php echo $no;?>">
					<input type="text" class="form-control" name="no_peg" id="no_peg" value="<?php echo $no_peg;?>">
				</div>
			</div>

			<div class="form-group">
				<label for="nama" class="col-sm-4 control-label">Nama</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
				</div>
			</div>

			<div class="form-group">
				<label for="jk" class="col-sm-4 control-label">Jenis Kelamin</label>
				<div class="col-sm-8">
				
				<?php if($jk=='Laki-laki') { ?>

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

				<?php }
					else { ?>

					<div class="form-check col-sm-6">						
					  <input class="form-check-input" type="radio" name="jk" id="Laki-laki" value="Laki-laki">
					  <label class="form-check-label" for="laki-laki">
					    Laki-laki
					  </label>
					</div>
					<div class="form-check col-sm-6">
					  <input class="form-check-input" type="radio" name="jk" id="Perempuan" value="Perempuan" checked>
					  <label class="form-check-label" for="perempuan">
					    Perempuan
					  </label>
					</div>
				
				<?php } ?>
				
				</div>
			</div>

			<div class="form-group">
				<label for="tp_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tp_lahir" name="tp_lahir" value="<?php echo $tp_lahir;?>">
				</div>
			</div>

			<div class="form-group">
				<label for="tgl_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
				<div class="col-sm-8">
					<div class="input-group date">
					    	<div class="input-group-addon">
					           <span class="glyphicon glyphicon-th"></span>
					       </div>
					       <input type="text" class="form-control datepicker" name="tgl_lahir" 
					       value="<?php echo $tgl_lahir[2]."-".$tgl_lahir[1]."-".$tgl_lahir[0];?>" readonly>
					   </div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="st_peg" class="col-sm-4 control-label">Status Pegawai</label>
				<div class="col-sm-8">
					
					<?php if($st_peg=='PNS') { ?>
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

					<?php }
					else if($st_peg=='GTT') {?>
					<div class="form-check col-sm-4">
					  <input class="form-check-input" type="radio" name="st_peg" id="PNS" value="PNS">
					  <label class="form-check-label" for="PNS">
					    PNS
					  </label>
					</div>
					<div class="form-check col-sm-4">
					  <input class="form-check-input" type="radio" name="st_peg" id="GTT" value="GTT" checked>
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
					<?php }
					else if($st_peg=='PTT') {?>
					<div class="form-check col-sm-4">
					  <input class="form-check-input" type="radio" name="st_peg" id="PNS" value="PNS">
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
					  <input class="form-check-input" type="radio" name="st_peg" id="PTT" value="PTT" checked>
					  <label class="form-check-label" for="PTT">
					    PTT
					  </label>
					</div>
					<?php }?>

				</div>
			</div>

			<div class="form-group">
				<label for="gol" class="col-sm-4 control-label">Golongan</label>
				<div class="col-sm-8">
					<select class="form-control" id="gol" name="gol">					    
						<?php 
							if ($gol=='IA'){ echo "<option value='IA' selected>IA</option>";}
								else {echo "<option value='IA'>IA</option>";}
							if ($gol=='IB'){ echo "<option value='IB' selected>IB</option>";}
								else {echo "<option value='IB'>IB</option>";}
							if ($gol=='IC'){ echo "<option value='IC' selected>IC</option>";}
								else {echo "<option value='IC'>IC</option>";}
							if ($gol=='ID'){ echo "<option value='ID' selected>ID</option>";}
								else {echo "<option value='ID'>ID</option>";}
							if ($gol=='IIA'){ echo "<option value='IIA' selected>IIA</option>";}
								else {echo "<option value='IIA'>IIA</option>";}
							if ($gol=='IIB'){ echo "<option value='IIB' selected>IIB</option>";}
								else {echo "<option value='IIB'>IIB</option>";}
							if ($gol=='IIC'){ echo "<option value='IIC' selected>IIC</option>";}
								else {echo "<option value='IIC'>IIC</option>";}
							if ($gol=='IID'){ echo "<option value='IID' selected>IID</option>";}
								else {echo "<option value='IID'>IID</option>";}
							if ($gol=='IIIA'){ echo "<option value='IIIA' selected>IIIA</option>";}
								else {echo "<option value='IIIA'>IIIA</option>";}
							if ($gol=='IIIB'){ echo "<option value='IIIB' selected>IIIB</option>";}
								else {echo "<option value='IIIB'>IIIB</option>";}
							if ($gol=='IIIC'){ echo "<option value='IIIC' selected>IIIC</option>";}
								else {echo "<option value='IIIC'>IIIC</option>";}
							if ($gol=='IIID'){ echo "<option value='IIID' selected>IIID</option>";}
								else {echo "<option value='IIID'>IIID</option>";}
							if ($gol=='IVA'){ echo "<option value='IVA' selected>IVA</option>";}
								else {echo "<option value='IVA'>IVA</option>";}
							if ($gol=='IVB'){ echo "<option value='IVB' selected>IVB</option>";}
								else {echo "<option value='IVB'>IVB</option>";}
							if ($gol=='IVC'){ echo "<option value='IVC' selected>IVC</option>";}
								else {echo "<option value='IVC'>IVC</option>";}
							if ($gol=='IVD'){ echo "<option value='IVD' selected>IVD</option>";}
								else {echo "<option value='IVD'>IVD</option>";}
						?>
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
					       <input type="text" class="form-control datepicker" name="thn_gol" 
					        value="<?php echo $thn_gol[2]."-".$thn_gol[1]."-".$thn_gol[0];?>" readonly>
					   </div>
				</div>
			</div>

			<div class="form-group">
				<label for="j_pend" class="col-sm-4 control-label">Jenjang Pendidikan</label>
				<div class="col-sm-8">
					<select class="form-control" id="j_pend" name="j_pend">					
					    <?php
					    if ($j_pend=='SMA/SMK'){ echo "<option value='SMA/SMK' selected>SMA/SMK</option>";}
							else {echo "<option value='SMA/SMK'>SMA/SMK</option>";}
						if ($j_pend=='D3'){ echo "<option value='D3' selected>D3</option>";}
							else {echo "<option value='D3'>D3</option>";}
						if ($j_pend=='S1'){ echo "<option value='S1' selected>S1</option>";}
							else {echo "<option value='S1'>S1</option>";}
						if ($j_pend=='S2'){ echo "<option value='S2' selected>S2</option>";}
							else {echo "<option value='S2'>S2</option>";}					    	
					    ?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="thn_lulus" class="col-sm-4 control-label">Tahun Lulus</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="thn_lulus" name="thn_lulus" value="<?php echo $thn_lulus;?>">
				</div>
			</div>

			<div class="form-group">
				<label for="tgs_1" class="col-sm-4 control-label">Tugas 1</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tgs_1" name="tgs_1" value="<?php echo $tgs_1;?>">
				</div>
			</div>

			<div class="form-group">
				<label for="jab" class="col-sm-4 control-label">Tugas 2 (Jabatan)</label>
				<div class="col-sm-8">
					<select class="form-control" id="id_jab" name="id_jab">					    
					    <?php
							include'koneksi.php'; 
							$cari=mysqli_query($koneksi,"select * from jabatan");
							while($hasil=mysqli_fetch_array($cari)){ 
								if ($hasil['id_jab']==$id_jab) {	
									echo '<option value="'.$hasil['id_jab'].'" selected>'.$hasil['jab'].' </option>'; } 
								else {
									echo '<option value="'.$hasil['id_jab'].'">'.$hasil['jab'].' </option>';
									} 
								} 
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
		</div>
		</form>
