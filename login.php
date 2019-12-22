<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Informasi SMAN 1 Pringsewu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="asset/images/logosmansa.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	<link href="asset/css/owl.carousel.css" rel="stylesheet">
	<link href="asset/css/owl.theme.default.min.css"  rel="stylesheet">
	<link href="asset/css/style.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
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
					<a class="navbar-brand page-scroll" href="index.php"><img src="asset/images/smansa.png" alt="Sanza theme logo"></a>
				</div>
				
			</div>
			<!-- /.container-fluid -->
		</nav>
<?php
session_start();
include 'koneksi.php';
 
if(!empty($_POST)){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if($username=='admin'){
    	$sql = "select * from user where username='".$username."' and password='".$password."'";
    	$query = mysqli_query($koneksi,$sql) or die (mysqli_error());
 	
 	if($query){
        $row = mysqli_num_rows($query);
    	if($row > 0){
    	$_SESSION['isLoggedIn']=1;
    	$_SESSION['username']=$username;
    	$_SESSION['level']='admin';
    	header('Location: admin/index.php');
    	}else{
			echo "<script>alert('username atau password salah!');history.go(-1);</script>";
        	}
    	}
    }else{
    $sql = "select * from siswa where nis='".$username."' and password='".$password."'";
    #echo $sql."<br />";
    $query = mysqli_query($koneksi,$sql) or die (mysqli_error());
 	
 	if($query){
        $row = mysqli_num_rows($query);
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            $_SESSION['level']='siswa';
            header('Location: siswa/index.php');

        }else{
			echo "<script>alert('username atau password salah!');history.go(-1);</script>";
        	}
    	}
	}
}
?>
<br>
<form action="" method="post">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('asset/images/sekolah.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="asset/images/logosmansa.png" width="120" height="120"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	</form>
<footer>
			<div class="container text-center">
				<p>Designed by <a href="https://himakom.ilkom.unila.ac.id"><span>Himakom </span>Uiversitas Lampung</a></p>
			</div>
		</footer>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/owl.carousel.min.js"></script>
	<script src="asset/js/cbpAnimatedHeader.js"></script>
	<script src="asset/js/jquery.appear.js"></script>
	<script src="asset/js/SmoothScroll.min.js"></script>
	<script src="asset/js/mooz.themes.scripts.js"></script>
</body>
</html>