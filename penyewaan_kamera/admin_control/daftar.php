<?php

	session_start();

	if (!isset($_SESSION["login"])) {
		echo "<script>alert('Anda bukan admin silahkan login dulu !!!');document.location.href = 'login.php';</script>";
	}
	$mysqli = mysqli_connect("localhost", "root", "","penyewaan_kamera");

	$query=mysqli_query($mysqli, "SELECT * FROM admin");
	function daftar($data){
		global $mysqli;

		$username = strtolower(stripcslashes($data["Username"]));
		$password = mysqli_real_escape_string($mysqli,$data["Password"]);
		$password2 = mysqli_real_escape_string($mysqli,$data["Password2"]);

		$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE Username = '$username'");

		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('Username tidak tersedia')</script>";
					return false;
		}

	if ($password!=$password2) {
			echo "<script>
					alert('Konfirmasi password salah')</script>";
			return false;
		
	}
	$password = password_hash($password, PASSWORD_DEFAULT);

			mysqli_query($mysqli, "INSERT INTO admin VALUES ('', '$username', '$password')");

		return mysqli_affected_rows($mysqli);
	}
	if (isset($_POST["daftar"])) {
		if (daftar($_POST) > 0) {
			echo "<script>
					alert('Berhasil terdaftar menjadi admin');document.location.href='login.php'</script>";
		}else{
			echo mysqli_error($mysqli);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Admin</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="login-box">
		<h1>Login admin</h1>
		<form action="" method="post">
			<div class="input-box">
				<input type="text" name="Username" placeholder="Username" required autocomplete="none">
			</div>
			<div class="input-box">
				<input type="Password" name="Password" placeholder="Password" required>
			</div>
			<div class="input-box">
				<input type="Password" name="Password2" placeholder="Confirm Password" required>
			</div>
			<div class="login-button">
				<button type="submit" name="daftar">Daftar</button>
			</div>	
		</form>
	</div>
</body>
</html>