<?php 

	$conn = mysqli_connect("localhost","root","","pw_173040138");

 	function query($query) {
 		global $conn;

	 	$result = mysqli_query($conn, $query);

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)){
		
			$rows[] = $row;
		}
		return $rows;
 	}

 	 	function tambah($data) {
 		global $conn;

 		$nama = htmlspecialchars($data["nama"]);
 		$latin = htmlspecialchars($data["latin"]);
 		$jenis = htmlspecialchars($data["jenis"]);
 		$tentang = htmlspecialchars($data["tentang"]);
 		$gambar = htmlspecialchars($data["gambar"]);	
 		$query = "INSERT INTO florafauna VALUES 
 					('','$nama','$gambar','$latin','$jenis','$tentang')";
 		mysqli_query($conn, $query);

 		return mysqli_affected_rows($conn);

 	}


 	function hapus($id) {
 		global $conn;
 		mysqli_query($conn, "DELETE FROM florafauna WHERE id=$id");

 		return mysqli_affected_rows($conn);

 	}


 	 function ubah($data) {
 		global $conn;

 		$id = $data["id"];
 		$nama = htmlspecialchars($data["nama"]);
 		$latin = htmlspecialchars($data["latin"]);
 		$jenis = htmlspecialchars($data["jenis"]);
 		$tentang = htmlspecialchars($data["tentang"]);
 		$gambar = htmlspecialchars($data["gambar"]);	
 		$query = "UPDATE florafauna SET 
 					nama = '$nama',
 					latin = '$latin',
 					jenis = '$jenis',
 					tentang = '$tentang',
 					gambar = '$gambar'
 					WHERE id = '$id' ";
 		mysqli_query($conn, $query);

 		return mysqli_affected_rows($conn);

 	}

?>