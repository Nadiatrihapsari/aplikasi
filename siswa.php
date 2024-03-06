<?php 
require 'function.php';

$siswa =query ("SELECT * FROM siswa");
if (isset($_POST["cari"])) {
  $siswa = cari($_POST["keyword"]);
  
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

    <title>SISFO</title>
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
          <a href="logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign out"></i></a>
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

<div class="col-md-10">
  

    <div class="container ml-3"> 
    <h3><i class="fas fa-user-graduate mr-2 mt-3"></i>DAFTAR SISWA</h3><div><hr>
  <?php 
     
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
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
  TAMBAH DATA SISWA
</button>
<br><br>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-primary">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="" method="post">
          <label for="exampleFormControlInput1">nis</label>
    <input type="text" name="nama" class="form-control" id="nama_lengkap" placeholder="masukan no induk anda">
     <label for="exampleFormControlInput1">nama</label>
    <input type="nama" class="form-control" id="nama" name="nama" placeholder="masukan nama">
     <label for="exampleFormControlInput1">jk</label>
    <input type="jenis_kelamin" class="form-control" id="jenis_kelamin" name="jk" placeholder="masukan jenis kelamin">
     <label for="exampleFormControlInput1">tempat lahir</label>
    <input type="tempat_lahir" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir">
     <label for="exampleFormControlInput1">tanggal lahir</label>
    <input type="tanggal_lahir" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="masukan tanggal lahir">
     <label for="exampleFormControlInput1">kelas</label>
    <input type="kelas" class="form-control" id="kelas" name="kelas" placeholder="masukan kelas">
     <label for="exampleFormControlInput1">jurusan</label>
    <input type="jurusan" class="form-control" id="jurusan" name="jurusan" placeholder="masukan jurusan">
     
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
<form action="" method="post">
      <input type="text" name=" keyword" size="30" autofocus="" autocomplete="off" placeholder="masukan data pencarian">
      <button type="submit" name="cari">Cari</button>
    </form>
</nav>
   <table class="table table-bordered mt-1">
  <thead>
    <tr>
      <th scope="col" class="text-center">No</th>
      <th scope="col" class="text-center">nis</th>
      <th scope="col" class="text-center">nama</th>
      <th scope="col" class="text-center">jk</th>
      <th scope="col" class="text-center">tempat_lahir</th>
      <th scope="col" class="text-center">tanggal_lahir</th>
      <th scope="col" class="text-center">kelas</th>
      <th scope="col" class="text-center">jurusan</th>
      <th scope="col" class="text-center" colspan="3">Aksi</th>
  </thead>
  <?php $i= 1; ?>
    <?php foreach($siswa as $swa) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $swa["nis"]; ?> </td>
      <td><?= $swa["nama"]; ?></td>
      <td><?= $swa["jk"]; ?></td>
      <td><?= $swa["tempat_lahir"]; ?></td>
      <td><?= $swa["tanggal_lahir"]; ?></td>
      <td><?= $swa["kelas"]; ?></td>
      <td><?= $swa["jurusan"]; ?></td>

      <td>
      <a href="detailsiswa.php?id=<?= $swa["id"]; ?>" class="btn btn-primary mt-2 text-center">DETAIL</a></td>
       <td><a href="ubahsiswa.php?id=<?= $swa["id"]; ?>"onclick = "return confirm ('Apakah Anda Yakin Ingin Mengubah?')"><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
      <td><a href="hapus.php?id=<?= $swa["id"]; ?>"onclick = "return confirm ('Apakah Anda Yakin Ingin Menghapus?')"><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></a></td>



    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
</div>
  </table>

 </div>
</div>
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