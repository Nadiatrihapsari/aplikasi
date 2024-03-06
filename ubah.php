<?php 
require 'function.php';

$id = $_GET["id"];
$swa = query("SELECT * FROM siswa WHERE id = $id")[0];


//cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {
	if(ubah($_POST) > 0 ) {
		echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href = 'index.php'
				</script>
				";
	}else {
		echo "
				<script>
					alert('Data Gagal Diubah');
					document.location.href = 'index.php'
				</script>
				";
	}


}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Ubah siswa</title>
</head>
<body>
	<h2>Ubah Siswa</h2>
	<form action="" method="post">
		
			<ul>
			<input type="hidden" name="id" value="<?= $swa["id"]; ?>">
			<li>
				<label for="nama">Nis :</label>
				<input type="text" name="nama" id="nama" required value="<?=$swa["nama"] ?>">
			<li>
				<label for="nis">Nama :</label>
				<input type="text" name="nis" id="nis" required value="<?=$swa["nis"] ?>">
			</li>
			<li>
				<label for="jurusan">JK :</label>
				<input type="jurusan" name="jurusan" id="jurusan" required value="<?=$swa["jurusan"] ?>">
			</li>
			<li>
				<label for="email">Tempat Lahir :</label>
				<input type="text" name="email" id="email" required value="<?=$swa["email"] ?>">
			</li>
			<li>
				<label for="gambar">Tanggal Lahir :</label>
				<input type="text" name="gambar" id="gambar" required value="<?=$swa["gambar"] ?>">
			</li>
			<li>
				<label for="gambar">Kelas :</label>
				<input type="text" name="gambar" id="gambar" required value="<?=$swa["gambar"] ?>">
			</li>
			<li>
				<label for="gambar">Jurusan :</label>
				<input type="text" name="gambar" id="gambar" required value="<?=$swa["gambar"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah data</button>
			</li>
		
		</ul>

	</form>
</body>
</html>



 

