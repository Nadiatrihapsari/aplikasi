<?php 
$conn= mysqli_connect("localhost", "root","","db_sekolah");

function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result))
	 {
		$rows[] = $row;
	}
	return $rows;
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM guru WHERE id= $id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	
	global $conn;
	$id = $data["id"];
	$Nomor_Induk_Pegawai = htmlspecialchars($data["Nomor_Induk_Pegawai"]);
	$Nama = htmlspecialchars($data["Nama"]);
	$JK = htmlspecialchars($data["JK"]);
	$Tempat_Lahir = htmlspecialchars($data["Tempat_Lahir"]);
	$Tanggal_Lahir = htmlspecialchars($data["Tanggal_Lahir"]);
	$Mata_Pelajaran = htmlspecialchars($data["Mata_Pelajaran"]);

$query =  "UPDATE guru SET
			Nomor_Induk_Pegawai = '$Nomor_Induk_Pegawai',
			Nama = '$Nama',
			JK = '$JK',
			Tempat_Lahir = '$Tempat_Lahir',
			Tanggal_Lahir = '$Tanggal_Lahir',
			Mata_Pelajaran = 'Mata_Pelajaran',
			WHERE id = '$id'";
		 		
	 	mysqli_query($conn, $query);
	 	// cek apakah data berhasil di ubah
	 	 return mysqli_affected_rows($conn);

}

function tambah($data){
	global $conn;
	$id = $data["id"];
	$Nomor_Induk_Pegawai = htmlspecialchars($data["Nomor_Induk_Pegawai"]);
	$Nama = htmlspecialchars($data["Nama"]);
	$JK = htmlspecialchars($data["JK"]);
	$Tempat_Lahir = htmlspecialchars($data["Tempat_Lahir"]);
	$Tanggal_Lahir = htmlspecialchars($data["Tanggal_Lahir"]);
	$Mata_Pelajaran = htmlspecialchars($data["Mata_Pelajaran"]);
	

//query insert data
	$query = "INSERT INTO guru VALUES('','$Nomor_Induk_Pegawai', '$Nama', '$JK', '$Tempat_Lahir', '$Tanggal_Lahir', 'Mata_Pelajaran')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
	
}

 ?>
