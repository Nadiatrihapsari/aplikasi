<?php 
session_start();

if(!isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'function.php';

$siswa =query ("SELECT * FROM siswa");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>siswa</title>
</head>
<body>
	<a href="logout.php">logout</a>
	<h2>Daftar siswa</h2>
	<table border="1" cellspacing="0">

		<tr>	
		<br>
		<a href="tambah.php">Tambah data siswa</a>
		<br><br>
		
			<th>no</th>
			<th>aksi</th>
			<th>gambar</th>
			<th>nama</th>
			<th>kelas</th>
			<th>jurusan</th>

		</tr>
		<?php $i= 1; ?>
		<?php foreach($siswa as $swa) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><a href="ubah.php? id=<?= $swa["id"]; ?>">ubah </a> | 
				<a href="hapus.php? id=<?= $swa["id"]; ?>"onclick = "return confirm ('Apakah Anda Yakin Ingin Menghapus?')">hapus</a></td>
			<td><img src="img/<?= $swa["gambar"]; ?>"></td>
			<td><?= $swa["nama"]; ?> </td>
			<td><?= $swa["kelas"]; ?></td>
			<td><?= $swa["jurusan"]; ?></td>
			

		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

	</table>
</body>
</html>