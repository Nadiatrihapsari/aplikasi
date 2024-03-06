<?php 
require 'function.php';

$id = $_GET["id"];
$swa = query("SELECT * FROM guru WHERE id = $id")[0];


//cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {
  if(ubah($_POST) > 0 ) {
    echo "
        <script>
          alert('Data Berhasil Diubah');
          document.location.href = 'guru2.php'
        </script>
        ";
  }else {
    echo "
        <script>
          alert('Data Gagal Diubah');
          document.location.href = 'guru2.php'
        </script>
        ";
  }


}
 ?>

 <!DOCTYPE html>
<html>
<head>
  <title>Ubah guru</title>
</head>
<body>
  <h2>Ubah Guru</h2>
  <form action="" method="post">
    
      <ul>
      <input type="hidden" name="id" value="<?= $gru["id"]; ?>">
      <li>
        <label for="">Nomor Induk Pegawai :</label>
        <input type="text" name="nama" id="nama" required value="<?=$gru["nama"] ?>">
      <li>
        <label for="nis">Nama :</label>
        <input type="text" name="nis" id="nis" required value="<?=$gru["nis"] ?>">
      </li>
      <li>
        <label for="jurusan">JK :</label>
        <input type="jurusan" name="jurusan" id="jurusan" required value="<?=$gru["jurusan"] ?>">
      </li>
      <li>
        <label for="email">Tempat Lahir :</label>
        <input type="text" name="email" id="email" required value="<?=$gru["email"] ?>">
      </li>
      <li>
        <label for="gambar">Tanggal Lahir :</label>
        <input type="text" name="gambar" id="gambar" required value="<?=$gru["gambar"] ?>">
      </li>
      <li>
        <label for="gambar">Mata Pelajarn :</label>
        <input type="text" name="gambar" id="gambar" required value="<?=$gru["gambar"] ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah data</button>
      </li>
    
    </ul>

  </form>
</body>
</html>



 

