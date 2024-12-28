<?php 
	require'connection.php';

	$conn = mysqli_connect("localhost", "root", "", "penyewaan_kamera");

		if (isset($_POST["sewa"])) {

		if (tambah($_POST) >= 0) {
			echo"<script>
					alert('Data berhasil ditambahkan');
				</script>";
		}else{ 
			echo "GAGAL GOBLOK";
		}

	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Orderan</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="">
<script src="https://kit.fontawesome.com/449e659d66.js" crossorigin="anonymous"></script>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body{
		font-family: Montserrat;
	}
	.header{
		display: flex;
		justify-content: center;
		padding: 30px 0;
	}
	.row-colum{
		float: left;
		width: 25%;
		padding: 10px;
	}
	.card{
		border-radius: 8px;
		background-color: white;
		box-shadow: 0 2px 10px 0 black;
	}
	.form-box:after{
		content: "";
		display: table;
		clear: both;
	}
	.card img{
		border-radius: 8px;
		width: 100%;
		height: auto;
	}
	.footer-card{
		border-radius: 8px;
		padding: 10px;
		background-color: orange;
		width: 100%;
		height: 25%;
	}
	.footer-card p{
		color: #fff;
		font-size: 20px;
	}
	.footer-card small{
		color: #fff;
	}
	.input{
		margin-top: 5px;
		background-color: white;
		border-radius: 3px;
	}
	.input input{
		color: #3d3d3d;
		padding: 10px;
		width: 100%;
		background: none;
		outline: none;
		border: none;
	}
	.radio{
		margin: 10px;
		background-color: #fff;
	}
	.button{
		background-color:#ee5253;
		display: inline-block;
		margin: 10px;
		border-radius: 3px;
	}
	.button button{
		display: block;
		cursor: pointer;
		border: none;
		outline: none;
		background: none;
		color: #fff;
		padding: 10px;
	}
	@media(max-width: 1024px){
		.row-colum{
			width: 50%;
		}
	}
	@media(max-width: 680px){
		.row-colum{
			padding: 10px 50px;
			width: 100%;
		}
	}

</style>
<body>
	<?php $query = mysqli_query($conn, "SELECT * FROM kamera"); ?>
	<div class="form-box">
	<form action="" method="post">
		<div class="header"><h1>Sewa Kamera</h1></div>
	<?php foreach ($query as $que) :?>

		<div class="container">

			<div class="row-colum">
				<div class="card">
					<img src="images/<?php echo $que["img"] ;?>">
					<div class="footer-card">
						<p><?php echo $que["Merk"] ;?> <?php echo $que["Tipe"] ;?></p>
						 <small>Rp. <?php echo $que["Tarif"] ;?>/Hari</small>
						
						<div class="input">
						<input class="LamaSewa" type="number" name="LamaSewa" placeholder="Durasi sewa max 10 Hari" min="1" max="10">
						</div>
						<input  type="radio" name="IDkamera" <?php if(isset($idk)&& $idk=='echo $que["Id"];')echo "checked"; ?> value=<?php echo $que["Id"] ?>>
						<div class="button">
						<button type="submit" name="sewa">Sewa</button>
						</div>
					</div>
				</div>
			</div>				
		</div>

	<?php endforeach ;?>	
	</form>
	</div>
</body>