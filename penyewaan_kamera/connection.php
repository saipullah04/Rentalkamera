<?php 
	$conn=mysqli_connect("localhost", "root", "", "penyewaan_kamera");

	function kirim($data){
		global $conn;

		mysqli_query($conn, "SELECT * FROM masukan");

		$nama = htmlspecialchars($data["Nama"]);
		$email = htmlspecialchars($data["Email"]);
		$pesan = htmlspecialchars($data["Pesan"]);

		$query = "INSERT INTO masukan
					VALUES 
					('', '$nama', '$email', '$pesan')";


		mysqli_query($conn, $query);

					
	}
	return mysqli_affected_rows($conn);


	function tambah($data){
			global $conn;
			$tanggal = date("d m Y");
			$idk = ($data['IDkamera']);
			$sewa = ($data['LamaSewa']);
			$result = $conn->query("SELECT Tarif FROM kamera WHERE Id=$idk");
			$obj = $result->fetch_object();
			$total = $sewa * $obj -> Tarif;

			$query = "INSERT INTO orderan
					VALUES 
					('','$tanggal','$idk','','$sewa','$total')";

			mysqli_query($conn, $query);
		}
		return mysqli_affected_rows($conn);
	

 ?>