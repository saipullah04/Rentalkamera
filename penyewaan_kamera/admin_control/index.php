<?php 
	session_start();

	if (!isset($_SESSION["login"])) {
		echo "<script>alert('Anda bukan admin silahkan login dulu !!!');document.location.href = 'login.php';</script>";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Control</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
		<div class="navbar-icon">
			<div class="h1">
			<h1 >Admin Control</h1>
			</div>
			<div class="logout">
				<a href="logout.php">Logout</a>
			</div>
		</div>
		<div class="navbar-button">
			<ul>
				<li><a href="index-kamera.php">Kamera</a></li>
				<li><a href="index-orderan.php">Orderan</a></li>
				<li><a href="index-masukan.php">Masukan</a></li>
			</ul>
		</div>
	</div>	
	<div class="container">
		<h1>Our business</h1>
	</div>
	<div class="footer">
		<p>Design Web By Gilang Rizki</p>
	</div>
	
</body>
</html>