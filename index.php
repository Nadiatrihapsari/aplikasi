<?php 
require 'function.php';

$siswa =query ("SELECT * FROM siswa");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>siswa</title>
</head>
<body>
	<table border="1" cellspacing="0">

		<tr>	
		<br>
		<a href="tambah.php">Tambah data siswa</a>
		<br><br>
		
			<th>no</th>
			<th>nomor_induk_siswa</th>
			<th>JK</th>
			<th>Tempat_lahir</th>
			<th>Tanggal_lahir</th>
			<th>kelas</th>
			<th>jurusan</th>

		</tr>
		<?php $i= 1; ?>
		<?php foreach($siswa as $swa) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><a href="ubah.php? id=<?= $swa["id"]; ?>">ubah </a> | 
				<a href="hapus.php?id=<?= $swa["id"]; ?>"onclick = "return confirm ('Apakah Anda Yakin Ingin Menghapus?')">hapus</a></td>
			<td><img src="img/<?= $swa["gambar"]; ?>"></td>	
			<td><?= $swa["nomor_induk_siswa"]; ?> </td>
			<td><?= $swa["nama"]; ?></td>
			<td><?= $swa["JK"]; ?></td>
			<td><?= $swa["Tempat_lahir"]; ?></td>
			<td><?= $swa["Tanggal_lahir"]; ?></td>
			<td><?= $swa["kelas"]; ?></td>
			<td><?= $swa["jurusan"]; ?></td>

		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

	</table>
</body>
</html>