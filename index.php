<?php 

	include 'helper/functions.php';

	if (isset($_GET["cari"])) {
		$keyword = $_GET["keyword"];
		$query = "SELECT * FROM florafauna
					WHERE nama LIKE '%$keyword%' OR 
						  latin LIKE '%$keyword%' OR
						  jenis LIKE '%$keyword%'";
		$florafauna = query($query);
	}else{
		$florafauna = query("SELECT * FROM florafauna");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Index</title>

   <link rel="stylesheet" href="assets/css/index.css">

</head>
<body>

<div class="header">
	<p class="judul">Flora dan fauna terancam Punah</p> <a href="admin/login.php"><p class="login">[Login]</p></a>
</div>

<form action="" method="GET" align="center">
	<input type="text" name="keyword" autocomplete="off">
	<button type="submit" name="cari">Search</button>
</form>

	<div class="back">
		<?php if(empty($florafauna)) :?>
			<div class="isi">
				<h4 align="center">Data tidak ditemukan</h3>
			</div>
		<?php else : ?>
		<?php foreach ($florafauna as $faunaflora) : ?>
		<div class="isi">
			<a href="php/profil.php?id=<?= $faunaflora['id'] ?>">
				<img src="assets/img/<?php echo $faunaflora["gambar"] ?>" class="rounded-circle">
			</a>
			<a href="php/profil.php?id=<?= $faunaflora['id'] ?>">
				<p class="nama"><b><?php echo $faunaflora["nama"] ?></b></p>
			</a>
			<a href="php/profil.php?id=<?= $faunaflora['id'] ?>">
				<p class="jenis">(<?php echo $faunaflora["jenis"] ?>)</p>
			</a>
		</div>
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>

<div class="footer">
	<h3>Diki Fauzi (173040138)</h3>
	</br>
</div>

</body>
</html>