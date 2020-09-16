<?php 
	session_start();
	if (!isset($_SESSION["login"])) {
		header("Location:login.php");
	}
	include '../helper/functions.php';
	
	if (isset($_POST["tambah"])) {
		if (tambah($_POST, $_FILES) > 0) {
			echo "<script>
					alert('Data Berhasil ditambah!');
					document.location.href = 'index.php';
				  </script>";
		}else{
			echo "<script>
					alert('Data Gagal ditambah!');
					document.location.href = 'index.php';
				  </script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/tambah.css">

</head>
<body>

<div class="box">
	<h1 class="text-center">Tambah Data</h1>
	<hr>
	<form action="" method="post">
		
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama" autofocus="" >

		<label for="latin">Nama Latin : </label>
		<input type="text" name="latin" id="latin">

		<label for="jenis">Jenis : </label>
		<input type="text" name="jenis" id="jenis">

		<label for="tentang">Deskripsi : </label>
		<textarea name="tentang" id="tentang" type="text"" cols="50" rows="5""></textarea>

		<label for="gambar">Gambar : </label>
		<input type="text" name="gambar" id="gambar">
<br><br>
		<button type="submit" name="tambah" class="btn" style="background-color: lightgreen;">Tambah</button>
		<a href="index.php" class="back">Kembali</a>

	</form>
</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>