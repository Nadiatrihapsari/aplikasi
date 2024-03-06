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
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="dasboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-3"></i> Daftar Siswa</a><hr class="bg-secondary">
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
    <h3<i class="fas fa-user-edit mr-2 mt-3"></i>DAFTAR PEGAWAI</h3><div><hr>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  TAMBAH DATA PEGAWAI
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-primary">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-primary">
        <form>
          <label for="exampleFormControlInput1">NIP</label>
    <input type="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="masukan kode anda">
     <label for="exampleFormControlInput1">Nama</label>
    <input type="nama" class="form-control" id="nama" placeholder="masukan nama">
     <label for="exampleFormControlInput1">Jenis kelamin</label>
    <input type="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="masukan jenis kelamin">
     <label for="exampleFormControlInput1">Tempat lahir</label>
    <input type="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="masukan tempat lahir">
     <label for="exampleFormControlInput1">Tanggal lahir</label>
    <input type="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="masukan tanggal lahir">
     <label for="exampleFormControlInput1">Bidang keahlian</label>
    <input type="kelas" class="form-control" id="kelas" placeholder="masukan bidang keahlian">
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="cari" placeholder="cari" aria-label="cari">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">cari</button>
  </form>
</nav>
   <table class="table table-bordered mt-1">
  <thead>
    <tr>
       <th scope="col" class="text-center">No</th>
      <th scope="col" class="text-center">Nip</th>
      <th scope="col" class="text-center">Nama</th>
      <th scope="col" class="text-center">JK</th>
      <th scope="col" class="text-center">Tempat Lahir</th>
      <th scope="col" class="text-center">Tanggal Lahir</th>
      <th scope="col" class="text-center">Bidang keahliaan</th>
      <th scope="col" class="text-center" colspan="3">Aksi</th>
  </thead>
  <tbody>
    <tr>
      <tr class="table-secondary">
      <th scope="row"class="text-center">1</th>
      <td>12345678</td>
      <td>Feri supriadi</td>
      <td>Laki-laki</td>
      <td>Bandung</td>
      <td>04 april 1995</td>
      <td>Operator</td>
      <td><button class="btn btn-primary" type="submit">Detail</button></td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
<td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>

    </tr>
    <tr>
      <th scope="row" class="text-center">2</th>
      <td>87654321</td>
      <td>Abah cece</td>
      <td>Laki-laki</td>
      <td>Bandung</td>
      <td>17 agustus 1995</td>
      <td>Pegawai kebersihan</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><a href="ubahpegawai.php?id=<?= $gru["id"]; ?>"onclick = "return confirm ('Apakah Anda Yakin Ingin Mengubah?')"><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
      <td><a href="hapuspegawai.php?id=<?= $gru["id"]; ?>"onclick = "return confirm ('Apakah Anda Yakin Ingin Menghapus?')"><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
    </tr>
    <tr>
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </body>
</html>