<?php 

session_start();

	if (isset($_SESSION["login"])) {
		echo "<script>alert('Anda sudah login !! Langsung menuju admin control');document.location.href = 'index.php';</script>";
	}

$mysqli = mysqli_connect("localhost", "root", "", "penyewaan_kamera");

mysqli_query($mysqli, "SELECT * FROM admin");

if (isset($_POST["login"])) {

	$username = $_POST["Username"];
	$password = $_POST["Password"];

	$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE Username = '$username'");

	if (mysqli_num_rows($result) === 1) {

		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["Password"])){

			$_SESSION["login"] = true;

			echo "<script>alert('Login berhasil. Anda sekarang admin');document.location.href = 'index.php';</script>";
		}

	}
	$error = true;

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="login-box">
		<h1>Login admin</h1>
			<?php if (isset($error)): ?>
	<p style="color: red;">Password atau Username salah</p>
	<?php endif; ?>
		<form action="" method="post">
			<div class="input-box">
				<input type="text" name="Username" placeholder="Username" required autocomplete="none">
			</div>
			<div class="input-box">
				<input type="Password" name="Password" placeholder="Password" required>
			</div>
			<div class="login-button">
				<button type="submit" name="login">Login</button>
			</div>	
			<div class="footer">
				<a href="daftar.php">Register</a>
			</div>
		</form>
	</div>
</body>
</html>