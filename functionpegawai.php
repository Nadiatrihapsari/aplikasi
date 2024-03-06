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
	mysqli_query($conn, "DELETE FROM pegawai WHERE id= $id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	
	global $conn;
	$id = $data["id"];
	$Nip = htmlspecialchars($data["Nip"]);
	$Nama = htmlspecialchars($data["Nama"]);
	$JK = htmlspecialchars($data["JK"]);
	$Tempat_Lahir = htmlspecialchars($data["Tempat_Lahir"]);
	$Tanggal_Lahir = htmlspecialchars($data["Tanggal_Lahir"]);
	$Bidang_keahlian = htmlspecialchars($data["Bidang keahlian"]);
	
$query =  "UPDATE siswa SET
			nip = '$Nip',
			nama = '$Nama',
			jk = '$Jk',
			tempat_lahir = '$Tempat_Lahir',
			tanggal_lahir = '$Tanggal_Lahir',
			bidang keahlian = '$Bidang_keahlian',
			WHERE id = '$id'";
		 		
	 	mysqli_query($conn, $query);
	 	// cek apakah data berhasil di ubah
	 	 return mysqli_affected_rows($conn);

}

function tambah($data){
	global $conn;
	$id = $data["id"];
	$Nis = htmlspecialchars($data["Nip"]);
	$Nama = htmlspecialchars($data["Nama"]);
	$JK = htmlspecialchars($data["JK"]);
	$Tempat_Lahir = htmlspecialchars($data["Tempat_Lahir"]);
	$Tanggal_Lahir = htmlspecialchars($data["Tanggal_Lahir"]);
	$Kelas = htmlspecialchars($data["Bidang_keahlian"]);

//query insert data
	$query = "INSERT INTO siswa VALUES('','$Nip', '$Nama', '$JK', '$Tempat_Lahir', '$Tanggal_Lahir', 'Bidang_keahlian')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
	
}

function registrasi($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_escape_string($conn, $data["password"]);
	$password2 = mysqli_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if (mysqli_fetch_assoc($result) ){
		echo "<script>
			alert('username sudah terdaftar');
			</script>";
			
			return false;

		
	}
	//cek konfirmasi password
	if ($password !== $password2){
		echo " <script>
				alert('konfirmasi password tidak sesuai');
				</script>";
				return false;
	}
	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('','$username', '$password')");
	return mysqli_affected_rows($conn);



}

 ?>
