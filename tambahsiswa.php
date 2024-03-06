<?php 

require 'function.php';

if (isset($_POST["submit"]) ) {
	if(tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'siswa.php';
			</script>
		";

	}else {
		echo "
			<script>
				alert('data Gagal ditambahkan');
				document.location.href = 'siswa.php';
			</script>
		";
	}
}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Tambah siswa</title>
</head>
<body>
	<h2>tambah Data Siswa</h2>
	<form action="" method="post">
		<ul>
			<li>
				<label for="Nis">Nis :</label>
				<input type="text" name="Nis" id="Nis" required >
			
			<li>
				<label for="Nama">Nama :</label>
				<input type="text" name="Nama" id="Nama" required >
			</li>
			<li>
				<label for="JK">JK :</label>
				<input type="JK" name="JK" id="JK" required >
			</li>
			<li>
				<label for="Tempat Lahir">Tempat_Lahir :</label>
				<input type="text" name="Tempat Lahir" id="Tempat Lahir" required>
			</li>
			<li>
				<label for="Tanggal Lahir">Tanggal_Lahir :</label>
				<input type="text" name="Tanggal Lahir" id="Tanggal Lahir" required >
			</li>
			<li>
				<label for="Kelas">Kelas :</label>
				<input type="text" name="Kelas" id="Kelas" required >
			</li>
			<li>
				<label for="Jurusan">Jurusan :</label>
				<input type="text" name="Jurusan" id="Jurusan" required >
			</li>
				<button type="submit" name="submit">Tambah data</button>
			</li>
		
		</ul>

	</form>
</body>
</html>