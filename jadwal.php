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
    <h3><i class="fas fa-calendar-alt mr-2 mt-3"></i>DAFTAR JADWAL</h3><div><hr>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  TAMBAH DATA
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-primary">
        <h5 class="modal-title" id="exampleModalLabel">Tambah jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-primary">
        <form>
          <label for="exampleFormControlInput1">No induk jadwal</label>
    <input type="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="masukan nama induk anda">
     <label for="exampleFormControlInput1">Mata pelajaran</label>
    <input type="nama" class="form-control" id="nama" placeholder="masukan mata pelajaran">
     <label for="exampleFormControlInput1">Kode np</label>
    <input type="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="masukan kode anda">
     <label for="exampleFormControlInput1">Guru pengajar</label>
    <input type="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="masukan nama pengajar">
     <label for="exampleFormControlInput1">Jurusan</label>
    <input type="kelas" class="form-control" id="kelas" placeholder="masukan jurusan">
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
      <th scope="col" class="text-center">NO</th>
      <th scope="col" class="text-center">MATA PELAJARAN</th>
      <th scope="col" class="text-center">KODE NP</th>
      <th scope="col" class="text-center">GURU MENGAJAR</th>
      <th scope="col" class="text-center">JURUSAN</th>
      <th scope="col" class="text-center" colspan="3">AKSI</th>
  </thead>
  <tbody>
    <tr>
      <tr class="table-secondary">
      <th scope="row"class="text-center">1</th>
      <td>PRODUKTIF</td>
      <td>-</td>
      <td>JIAN MAULANA</td>
      <td>RPL</td>
      <td><button class="btn btn-primary" type="submit">Detail</button></td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>

    </tr>
    <tr>
      <th scope="row" class="text-center">2</th>
      <td>TKRO</td>
      <td>-</td>
      <td>RIJAL PURNAMA</td>
      <td>PKKR</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
      <tr class="table-secondary">
      <th scope="row" class="text-center">3</th>
      <td>PERHOTELAN</td>
      <td>-</td>
      <td>SINDI SELVIA</td>
      <td>LDR</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
      </tr>
      <tr>
      <th scope="row" class="text-center">4</th>
      <td>BAHASA SUNDA</td>
      <td>-</td>
      <td>YONAN GAHA</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
       <tr class="table-secondary">
      <th scope="row" class="text-center">5</th>
      <td>BAHASA INDONESIA</td>
      <td>-</td>
      <td>LILIS EVI MULYANI</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
      <th scope="row" class="text-center">6</th>
      <td>BAHASA INGGRIS</td>
      <td>-</td>
      <td>EVA LESTARI</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
       <tr class="table-secondary">
      <th scope="row" class="text-center">7</th>
      <td>SENI</td>
      <td>-</td>
      <td>LILIT DODI</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
      <th scope="row" class="text-center">8</th>
      <td>BK</td>
      <td>-</td>
      <td>RIJAL PURNAMA</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
      <tr class="table-secondary">
      <th scope="row" class="text-center">9</th>
      <td>PABP</td>
      <td>-</td>
      <td>CHALIANDRA AL-RIZKI</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
      <th scope="row" class="text-center">10</th>
      <td>PKK</td>
      <td>-</td>
      <td>OGI SUPRAYOGI</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
    </tr>
    <tr>
      <tr class="table-secondary">
      <th scope="row" class="text-center">11</th>
      <td>PJOK</td>
      <td>-</td>
      <td>RIZA AZHARI</td>
      <td>ALL PRODI</td>
      <td><button class="btn btn-primary" type="submit">Detail</button>
      </td>
      <td><i class="fas fa-edit text-primary p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
      <td><i class="fas fa-trash-alt text-primary p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
  </body>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </body>
</html>