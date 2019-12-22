<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="images/logo_smansa.png">
		<title>Sistem Informasi SMAN 1 Pringsewu</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
		<link rel="stylesheet" href="plugins/datatables/jquery.dataTables.min.css">
		<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- lib js untuk datatables -->
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<!-- lib js untuk datatables -->
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="index.php"><img src="images/smansa.png" alt="Smansa"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
							
						<li>
							<a class="page-scroll" href="data.php">Data Siswa</a>
						</li>
						<li>
							<a class="page-scroll" href="#about">About</a>
						</li>
						<li>
							<a class="page-scroll" href="login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Header -->
		<br><br><br><br>
		<div class="container">
		<div class="intro-text">
			<div class="intro-lead-in">DATA SISWA</div>
		</div>
		</div>
	<br>
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- panel panel-primary -->
				<div class="panel panel-primary">
					
	                <div class="panel-body">

						<table id="tabel_data_siswa" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>NIS</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Kelas</th>
									<th>Foto</th>
								
								</tr>
							</thead>
							<?php
		                    $query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY nis ASC");
		                    $i=1;
		                    while($data = mysqli_fetch_array($query)){
		                        ?>
		                        <tr>
		                            <td><?php echo $i ?></td>
		                            <td><?php echo $data["nis"];?></td>
		                            <td><?php echo $data["nama"];?></td>
		                            <td><?php echo $data["jenis_kelamin"];?></td>
		                            <td><?php echo $data["kelas"];?></td>
		                            <td><img src="images/fotosiswa/<?php echo $data['foto'] ; ?>" border="0" height='100px' weight='100px' /></td>
		                		</tr>
		                	<?php $i++; } ?>
							<tfoot>
								<tr>
									<th>NO</th>
									<th>NIS</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Kelas</th>
									<th>Foto</th>
								</tr>
							</tfoot>
						</table>                   
				
			</div><!--/.col (right) -->
		</div> <!-- /.row -->
	</section><!-- /.container -->
	<script type="text/javascript">
		var t = $('#tabel_data_siswa').DataTable({
				  "autoWidth": false,		  
				  "columnDefs": [
	    				{ "width": "2%", "sClass": "dt-head-center dt-body-center", "targets": 0 },
	    				{ "width": "5%", "sClass": "dt-head-center dt-body-left", "targets": 1 },
	    				{ "width": "20%", "sClass": "dt-head-center dt-body-left", "targets": 2 },
	    				{ "width": "10%", "sClass": "dt-head-center dt-body-left", "targets": 3 },
	    				{ "width": "10%", "sClass": "dt-head-center dt-body-left", "targets": 4 },
	    				{ "width": "10%", "sClass": "dt-head-center dt-body-left", "targets": 5 },

	  				]
				});	

	</script>	
		
		<section id="about" class="dark-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>About</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="section-text">
							<h4>Contact</h4>
							<p><i class="fa fa-phone"></i> No. Telephone</p>
							<p> (0721) 21085</p>
							<p><i class="fa fa-envelope"></i> Email</p>
							<p>sman01pringsewu@yahoo.com</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-text">
							<h4>Business Hours</h4>
							<p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span>7am to 3pm</span></p>
							<p><i class="fa fa-clock-o"></i> <span class="day">Weekend:</span><span>Closed</span></p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-text">
							<h4>Address</h4>
							<p>Jl. Olahraga No.1, Pringsewu Bar., Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="section-text">
						<h4>Maps</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.43070671831!2d104.96678311536357!3d-5.351048755073471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da2ad2e87403%3A0x85d045416d4bd55a!2sSMA+N+1+PRINGSEWU!5e0!3m2!1sid!2sid!4v1548050183732" width="450" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>	
						</div>					
					</div>
				</div>
			</div>
		</section>
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>Designed by <a href="https://himakom.ilkom.unila.ac.id"><span>Himakom </span>Uiversitas Lampung</a></p>
			</div>
		</footer>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/SmoothScroll.min.js"></script>
		<script src="js/mooz.themes.scripts.js"></script>
	</body>
</html>