<?php 

	session_start();
	session_unset();
	session_destroy();




	echo "<script>alert('Telah berhasil log out. Terimakasih ');document.location.href = 'login.php';</script>"
	
	

 ?>