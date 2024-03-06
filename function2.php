<?php 
$conn= mysqli_connect("localhost", "root","","db_sekolah");

function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa WHERE id= $id");
	
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id = $data["id"];
	$nomor_induk_siswa = htmlspecialchars($data["nomor_induk_siswa"]);
	$nama = htmlspecialchars($data["nama"]);
	$jk =htmlspecialchars($data["jk"]);
	$tempat_tanggal_lahir =htmlspecialchars($data["tempat_tanggal_lahir"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);


$query =  "UPDATE siswa SET
			
			nomor_induk_siswa = '$nomor_induk_siswa',
			nama = '$nama',
			jk = '$jk',
			tempat_tanggal_lahir = '$tempat_tanggal_lahir',
			kelas = '$kelas',
			jurusan = '$jurusan',
			gambar = '$gambar'
		    	WHERE id = '$id' ";
		 		
	 	mysqli_query($conn, $query);
	 	 return mysqli_affected_rows($conn);

}

function tambah($data){
	global $conn;
	$nomor_induk_siswa = htmlspecialchars ($data["nomor_induk_siswa"]);
	$nama = htmlspecialchars ($data["nama"]);
	$jk = htmlspecialchars ($data["jk"]);
	$tempat_tanggal_lahir = htmlspecialchars ($data["tempat_tanggal_lahir"]);
	$kelas = htmlspecialchars ($data["kelas"]);
	$jurusan = htmlspecialchars ($data["jurusan"]);
	$gambar = htmlspecialchars ($data["gambar"]);

//query insert data
	$query = "INSERT INTO siswa VALUES 
				('','$nomor_induk_siswa', '$nama', '$jk', '$tempat_tanggal_lahir', '$kelas', '$jurusan', '$gambar')" ;
				
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	
}

function registrasi($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_escape_string($conn, $data["password"]);
	$password2 = mysqli_escape_string($conn, $data["password2"]);

	//cek username sudah adaa tau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
		alert ('username sudah terdaftar');

		</script>";
		# code...
	}
	//konfirmasi
	if ($password !== $password2) {
		echo "<script>
			alert ('konfirmasi password tidak sesuai');
		</script>";

		return false;
		
	}
	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	

	//TAMBAHKAN USER BARU KE DATABASE
	mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
	return mysqli_affected_rows($conn);

}

 ?>
