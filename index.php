<?php include 'cek_session_index.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
    	<title>Home</title>
	</head>

	<body background="img/banner-bg.jpg">
		
		<!-- header navbar -->
		<nav class= "navbar navbar-inverse">
			<?php include 'navbar-header.php';?>
			<!-- navbar pilihan -->
			<div class="collapse navbar-collapse" id="target-list">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Input Data<b class="caret"></b></a>
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
		
		<div class="contain text-center">
			<hr>
			<font color="#ffffff"><h1>SISTEM INFORMASI KEPEGAWAIAN <br> SMA NEGERI 4 KUPANG</h1></font>
			<hr>
		</div>

		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">		  
		    <?php include 'index-panel1.php';?>
		  	<?php include 'index-panel2.php';?>
		  	<?php include 'index-panel3.php';?>
		</div>
				
		<!-- modal utk bacapesan -->
		<?php include 'modal_bg.php';?>
		<?php include 'modal_bp.php';?>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>		
		<!-- olah pesan -->
		<?php include 'skrip-pesan.php';?>

	</body>	
</html>