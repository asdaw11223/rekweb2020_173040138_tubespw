<?php 

	session_start();
	if (!isset($_SESSION["login"])) {
		header("Location:login.php");
	}
	include '../helper/functions.php';

	$florafauna = query("SELECT * FROM florafauna");
		
	if (isset($_GET["cari"])) {
		$keyword = $_GET["s"];
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index | Admin</title>

	<!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/admin.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="index.php">Flora dan Fauna Terancam Punah</a>
    <ul class="navbar-nav mr-auto">
    </ul>	
	<a href="logout.php" class="out" onclick="return confirm('Anda yakin akan keluar ?')"><button class="btn btn-danger">Log-out</button></a>
  </div>
</nav>
<div class="back">
<a href="tambah.php"><button  class="btn tambah btn-success">Tambah Data</button></a>
    <form action="" method="GET" class="form-inline my-2 my-lg-0 form">
		<input type="text" name="s" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0 sear" type="submit" name="cari" autocomplete="off">Search</button>
	</form>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Gambar</th>
		<th>Nama latin</th>
		<th>Jenis</th>
		<th>Deskripsi</th>
		<th width="160px">Aksi</th>
	</tr>
<?php if (empty($florafauna)) : ?>
	<tr>
		<td colspan="7">
			<h1 align="center">DATA TIDAK DITEMUKAN</h1>
		</td>
	</tr>
<?php else : ?>
<?php $no = 1; ?>
<?php foreach ($florafauna as $faunaflora) : ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $faunaflora["nama"]; ?></td>
		<td><img src="../assets/img/<?php echo $faunaflora["gambar"]; ?>" alt="" style="width: 100px; height: 100px;"></td>
		<td><?php echo $faunaflora["latin"]; ?></td>
		<td><?php echo $faunaflora["jenis"]; ?></td>
		<td><?php echo $faunaflora["tentang"]; ?></td>
		<td>
			<a href="ubah.php?id=<?php echo $faunaflora['id']; ?>"><button class="btn btn-primary">Ubah</button></a>
			<a href="hapus.php?id=<?php echo $faunaflora['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><button  class="btn btn-danger">Hapus</button></a>
		</td>
	</tr>
<?php endforeach; ?>
<?php endif ?>
</table>
</div>

<footer>
	<h6>Diki Fauzi (173040138)</h6>
</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>