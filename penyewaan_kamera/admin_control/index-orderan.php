<?php 
	session_start();

	if (!isset($_SESSION["login"])) {
		echo "<script>alert('Anda bukan admin silahkan login dulu !!!');document.location.href = 'login.php';</script>";
	}

	require 'connection.php';

	$query = mysqli_query($conn, "SELECT * FROM orderan");
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
			<div class="home">
				<a href="index.php">Home</a>
			</div>	
		</div>
		<div class="navbar-button selected">
			<ul>
				<li> <a href="index-kamera.php">Kamera</a></li>
				<li class="whitebg"><a href="">Orderan</a></li>
				<li><a href="index-masukan.php">Masukan</a></li>
			</ul>
		</div>
	</div>	
	<div class="container">
		<table border="1px" cellpadding="10px">
			<tr>
				<th>ID</th>
				<th>Action</th>
				<th>Tanggal order</th>
				<th>ID Kamera</th>
				<th>ID Customer</th>
				<th>Durasi sewa</th>
				<th>Total</th>
			</tr>
			<?php foreach($query as $que) :?>
			<tr>
			<td><?php echo $que["Id"] ;?></td>
			<td><a href="">Ubah</a>, <a href="">Hapus</a></td>
			<td><?php echo $que ["Tanggal"] ;?></td>
			<td><?php echo $que ["IDkamera"] ;?></td>
			<td><?php echo $que ["IDcustomer"] ;?></td>
			<td><?php echo $que ["LamaSewa"] ;?></td>
			<td><?php echo $que ["Total"] ?></td>
			</tr>
		<?php endforeach ;?>
		</table>
	</div>
	<div class="footer">
		<p>Design Web By Gilang Rizki</p>
	</div>
	
</body>
</html>