<?php 
	session_start();
	if (!isset($_SESSION["login"])) {
		header("Location:login.php");
	}
	include '../helper/functions.php';
	
	$id = $_GET['id'];
	$faunaflora = query("SELECT * FROM florafauna WHERE id = $id")[0];

	if (isset($_POST["ubah"])) {
		if (ubah($_POST, $_FILES) > 0) {
			echo "<script>
					alert('Data Berhasil diUbah!');
					document.location.href = 'index.php';
				  </script>";
		}else{
			echo "<script>
					alert('Data Gagal diUbah!');
					document.location.href = 'index.php';
				  </script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/ubah.css">

</head>
<body>
<div class="box">
	<h1 align="center">Ubah Data</h1>
	<hr>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $faunaflora['id']; ?>">

		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama" value="<?php echo $faunaflora['nama']; ?>">

		<label for="latin">Nama Latin : </label>
		<input type="text" name="latin" id="latin" value="<?php echo $faunaflora['latin']; ?>">

		<label for="jenis">Jenis : </label>
		<input type="text" name="jenis" id="jenis" value="<?php echo $faunaflora['jenis']; ?>">

		<label for="tentang">Deskripsi : </label>
		<textarea name="tentang" id="tentang" cols="30" rows="10"><?php echo $faunaflora['tentang']; ?></textarea>

		<label for="gambar">Gambar : </label><br>
		<input type="text" name="gambar" id="gambar" value="<?php echo $faunaflora['gambar']; ?>">
<br><br>
		<button type="submit" name="ubah" class="btn" style="background-color: lightgreen;">Ubah</button>
		<a href="index.php"  class="back">kembali</a>

	</form>
</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>