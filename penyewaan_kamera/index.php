
<?php require 'connection.php'; 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Penyewaan Kamera</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://kit.fontawesome.com/449e659d66.js" crossorigin="anonymous"></script>
<body>
	<?php $query = mysqli_query($conn, "SELECT * FROM kamera");
 ?>
		<div class="navbar">
			<div class="navbar-icon"><h1>Sewa kamera</h1>
			</div>
			<div class="navbar-nav navbar-collapse">
				<ul class="nav">
					<li class="nav-item"><a class="nav-link" href="#home"><i class="fas fa-home"></i>Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="far fa-id-badge"></i>About</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact"><i class="far fa-question-circle"></i>Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="container-text">
				<h1>Sewa kamera</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<div class="container-button"><button type="submit">CONTACT US</button></div>
			</div>
		</div>
		<div class="plus">
			<h1>Keunggulan sewa di sini</h1>
			<div class="plus-col3 plus-card">
					<h1>Test</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="plus-col3 plus-card">
					<h1>Test</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="plus-col3 plus-card">
					<h1>Test</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
		<div class="list-cam">
			<h1>LIST KAMERA</h1>
			<?php foreach($query as $que) :?>
			<div class="cam-row-col4 ">
				<div class="list-cam-row">
					<div class="list-card">
						<img src="images/<?php echo $que["img"]; ?>">
					</div>
					<div class="text-card">
						<p><?php echo $que["Merk"]. $que["Tipe"]?></p>
					</div>	
				</div>
			</div>
			<?php endforeach ; ?>
			<div class="list-kamera-footer">
				<div class="kamera-footer-col">
					<p>Jika berminat untuk sewa di sini silahkan klik tombol di samping </p>
				</div>
				<div class="list-cam-button kamera-footer-col">
						<a href="orderan.php" target="_blank">Sewa sekarang</a>
					</div>
			</div>

		</div>
		<div class="contact">
			<h1>Kontak kami !!</h1>
			<form action="" method="post">
				<div class="input-box">
					<input type="text" name="" placeholder="Nama">
				</div>
				<div class="input-box">
					<input type="Email" name="" placeholder="Alamat email">
				</div>
				<div class="input-box">
					<input type="text" name="" placeholder="Pesan">
				</div>
				<div class="form-button">
					<button type="submit" name="kirim">Kirim</button>
				</div>
			</form>
		</div>
		<div class="footer">
			<p>CopyRight By Gilang Rizki</p>
		</div>
</body>
</html>

