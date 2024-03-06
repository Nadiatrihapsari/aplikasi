<?php 
require 'function.php';
$id = $_GET["id"];

$swa = query("SELECT * FROM pegawai WHERE id = $id")[0];


//cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {
	if(ubah ($_POST) > 0 ) {
		echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href = 'pegawai.php'
				</script>
				";
	}else {
		echo "
				<script>
					alert('Data Gagal Diubah');
					document.location.href = 'pegawai.php'
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
    <a class="navbar-brand" href="#">SELAMAT DATANG | <b> DI SMK PUTRA GUNUNGHALU</b></a>
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
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
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
    
      
    <div class="col-md-10 p-5 pt-2"> 
    <h3><i class="fas fa-user-graduate mr-2 mt-3"></i>UBAH SISWA</h3><div><hr>
      <div class="modal-body">
        
    

    		<form class="from-group" action="" method="post">
          <input type="hidden" name="id" value="<?= $swa["id"]  ?>">
    		
    				
    				<label for="Nip">Nip</label>
    				<input type="text" name="Nip" class="form-control" id="Nip" placeholder="" required value="<?= $gru["Nip"] ?> ">

    				<label for="nama">Nama</label>
    				<input type="text" name="nama" class="form-control" id="nama" placeholder="" required value="<?= $gru["nama"] ?> ">

    				<label for="jk">JK</label>
    				<input type="text" name="jk" class="form-control" id="jk" placeholder="" required value="<?= $gru["jk"] ?> ">

    				<label for="Tempat_Lahir">Tempat Lahir</label>
    				<input type="text" name="Tempat_Lahir" class="form-control" id="Tempat_Lahir" placeholder="" required value="<?= $gru["Tempat_Lahir"]; ?> ">

    				<label for="Tempat_Lahir">Tanggal Lahir</label>
    				<input type="text" name="Tempat_Lahir" class="form-control" id="Tempat_Lahir" placeholder="" required value="<?= $gru["Tempat_Lahir"] ?> ">

    				<label for="Bidang_Keahlian">Bidang Keahlian</label>
    				<input type="text" name="Bidang_Keahlian" class="form-control" id="Bidang_Keahlian" placeholder="" required value="<?= $gru["Bidang_Keahlian"] ?> ">



    				
    				<br>
    				<button type="button" class="btn btn-danger"><a href="siswa.php">Kembali</a></button>
    				<button type="submit" name="submit" class="btn btn-primary">Ubah</button>

    		</form>
          </div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript" scr="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" scr="js/popper.min.js"></script>
    <script type="text/javascript" scr="js/bootstrap.min.js"></script>

    <script type="text/javascript" scr="js/fontawesome/admin.js"></script>
    
  </body>
  </body>
</html>

