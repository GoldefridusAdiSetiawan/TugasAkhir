<?php
					include 'koneksi.php';
					$query=mysqli_query($koneksi,"select * from pesan where st_p='0'");
					$result=mysqli_query($koneksi,"select count(*) as jumlah from pesan where st_p='0'");
					$hitung=mysqli_fetch_array($result);
					?>
            		<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">                            
                            <i class="fa fa-envelope-o"></i>
                            <?php if ($hitung['jumlah']!="0") { ?>
                            <span class="badge bg-theme"><?php echo $hitung['jumlah']; ?></span>
                            <?php }?>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">
                                	<?php if ($hitung['jumlah']!="0") {
                                        echo "Kamu punya ".$hitung['jumlah']." pesan baru";}
                                        else {
                                            echo "Kamu tidak punya pesan baru";
                                        }                                       
                                    ?> 
                                </p>
                            </li>
                            <?php while ($data=mysqli_fetch_array($query)) 
                            	{	
							?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#show" data-id="<?php echo $data["id_pesan"]; ?>">
                                    <!-- <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span> -->
                                    <span class="subject">
                                    <span class="from"><?php echo $data["judul"]?></span>
                                    <span class="time"><?php echo $data["waktu"]?></span>
                                    </span>
                                    <span class="message">
                                        <?php                                      								    
											$limited_string = substr($data["isi"], 0,30);
											echo $limited_string."....";
                                        ?>
                                    </span>
                                </a>
                            </li>
                            <?php } ?>                  
                            <li>
                                <a href="pesan2.php">Lihat semua pemberitahuan</a>
                            </li>
                        </ul>