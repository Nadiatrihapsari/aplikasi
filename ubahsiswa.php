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
					document.location.href = 'siswa.php'
				</script>
				";
	}else {
		echo "
				<script>
					alert('Data Gagal Diubah');
					document.location.href = 'siswa.php'
				</script>
				";
	}


}
 ?>

 <!doctype html>
 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <title>Table</title>
  </head>
   <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SMK PUTRA GUNUNGHALU</b></a>
      <form class="form-inline my-2 my-lg-0  ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <div class="icon ml-4">
        <h5>
          <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat masuk"></i>
          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
          <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign out"></i>
        </h5>
      </div>
    </div>
  </nav>

   <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-5 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="dasboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-2"></i> Daftar Siswa</a><hr class="bg-secondary">
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="guru2.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar guru</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2"></i> Daftar Pegawai</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Sekolah</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i> Nilai Siswa</a><hr class="bg-secondary">
      </li>
    </ul>
    </div>
<div class="container ml-3"> 
    <h3><i class="fas fa-user-graduate mr-2 mt-3"></i>DAFTAR SISWA</h3><div><hr>

      <div class="modal-body">
        <input type="hidden" name="id" required value="<?= $swa["id"] ?>">
        <form class="form-group" action="" method="post">
     <label for="Nis">Nis</label>
    <input type="text" class="form-control" id="Nis" name="nis" required value="<?= $swa["nis"]; ?>"> 
     <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="Nama" name="nama" required value="<?= $swa["nama"]; ?>"> 
     <label for="Jk">JK</label>
    <input type="text" class="form-control" id="JK" name="jk" required value="<?= $swa["jk"]; ?>">
     <label for="Tempat_Lahir">Tempat_Lahir</label>
    <input type="text" class="form-control" id="Tempat_Lahir" name="tempat_lahir" required value="<?= $swa["tempat_lahir"]; ?>">
     <label for="tanggal_lahir">Tanggal_Lahir</label>
    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required value="<?= $swa["tanggal_lahir"]; ?>">
     <label for="kelas">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" required value="<?= $swa["kelas"]; ?>">
     <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control" id="Jurusan" name="jurusan" required value="<?= $swa["jurusan"]; ?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
</div>
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
  </form>
</nav>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <script type="text/javascript" src="js/Popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
  

   <script type="text/javascript" src="admin.js"></script>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>