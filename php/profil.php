<?php 
	
	if (!isset($_GET["id"])){
		header("Location:../index.php");
		die;
	}
	include '../helper/functions.php';
	$id = $_GET["id"];
	$faunaflora = query("SELECT * FROM florafauna WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $faunaflora['nama']; ?></title>

   <link rel="stylesheet" href="../assets/css/profil.css">

</head>
<body>
	
<div class="header">
	<h1><?php echo $faunaflora["jenis"]; ?> yang Terancam Punah</h1>
</div>
	
	<div class="back">
		<div class="isi">
				<p class="gambar"><img src="../assets/img/<?php echo $faunaflora["gambar"]; ?>"></p>
				<p class="nama"><?php echo $faunaflora["nama"]; ?> <span class="latin" >(<?php echo $faunaflora["latin"]; ?>)</span></p>
				<p class="jenis"><?php echo $faunaflora["jenis"]; ?></p>
				<p class="tentang"><?php echo $faunaflora["tentang"]; ?><p>
		</div>
	</div>
	
	<a href="../index.php"><button type="button" class="btn">Kembali</button></a>


<div class="footer">
	<h3>Diki Fauzi (173040138)</h3>
</div>

</body>
</html>