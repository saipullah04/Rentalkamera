<?php 

require 'connection.php';	
	
	mysqli_query($conn, "SELECT * FROM masukan");

	if (isset($_POST["send"])) {
		if (kirim($_POST) >= 0) {
			echo"<script>
					alert('Telah terkirim');
					document.location.href = 'index.php';
				</script>";
		}else{ 
			echo "<script>
					alert('Kesalahan saat mengirim !!');
					document.location.href = 'index.php';
				</script>";
		}

	}


	


 ?>