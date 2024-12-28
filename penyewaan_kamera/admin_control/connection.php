<?php 

	$conn = mysqli_connect("localhost", "root", "", "penyewaan_kamera");


	function hapus($id){
			global $conn;

			mysqli_query($conn, "DELETE FROM masukan WHERE id=$id");

			return mysqli_affected_rows($conn);
		}

	function tambah($data){
		global $conn;

		$img = htmlspecialchars($data["img"]);
		$merk = htmlspecialchars($data["Merk"]);
		$tipe = htmlspecialchars($data["Tipe"]);
		$tarif = htmlspecialchars($data["Tarif"]);
		$status = htmlspecialchars($data["Status"]);

		$query = "INSERT INTO kamera 
				VALUES ('', '$img', '$merk', '$tipe', '$tarif', '$status')";

		mysqli_query($conn, $query);
	}	
	return mysqli_affected_rows($conn);

 ?>