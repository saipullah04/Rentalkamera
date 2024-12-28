<?php 

	require 'connection.php';

	if(isset($_POST["Simpan"])){

		if(tambah($_POST) >= 0){
			echo "Data berhasil di tambahkan";
		}else{
			echo "Kesalah parse";
		}

	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
</head>
<body>
	<h1>Tambah data kamera</h1>
	<form action="" method="post">
		<label for="img">Gambar</label>
		<input type="file" name="img" id="img"><br>
		<label for="Merk">Merk :</label>
		<input type="text" name="Merk" id="Merk"><br>
		<label for="Tipe">Tipe :</label>
		<input type="text" name="Tipe" id="Tipe"><br>
		<label for="Tarif">Tarif :</label>
		<input type="number" name="Tarif" id="Tarif"><br>
		<label for="Status">Status :</label>
		<input type="text" name="Status" id="Status"><br>
		<button type="submit" name="Simpan">Simpan</button>
	</form>
</body>
</html>