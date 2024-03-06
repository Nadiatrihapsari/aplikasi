<?php 
require 'function.php';
$siswa = query("SELECT * FROM guru");

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <title>Dashboard</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SMK PUTRA GUNUNGHALU</b></a>
         <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
        <div class="icon mr-4">
          <h5> 
            <i class="fas fa-envelope ml-3" data-togle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell ml-3" data-togle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt ml-3" data-togle="tooltip" title="Sign Out"></i>
          </h5>
        </div>
      </nav>
      <div class="row no-gutter mt-5 ">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
              <a class="nav-link active text-white" href="index.html"><i class="fas fa-tachometer-alt mr-2" ></i>Dashboard</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Siswa</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="guru2.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Guru</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2"></i>Daftar Pegawai</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="pelajaran.php"><i class="fas fa-calendar-alt mr-2"></i>Jadwal Pelajaran</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="nilai_siswa.php"><i class="fas fa-paper-plane mr-2"></i>Nilai Siswa</a> <hr class="bg-secondary">
            </li>
          </ul>

      </div>
      <div class="col-md-10 p-5 pl-2">
        <h3><i class="fas fa-chalkboard-teacher mr-2"></i>DAFTAR GURU</h3><hr>
        <div class="row text-white">
          <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-primary">Tambah Data Guru</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-primary">
                     <form>
                        <div class="form-group">
                          <label for="nip">nip</label>
                          <input type="text" class="form-control" id="nip" placeholder="Masukan Nomor Induk Pegawai">
                        
                          <label for="nama">nama</label>
                          <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
                        
                          <label for="jk">jk</label>
                          <input type="text" class="form-control" id="jk" placeholder="Masukan Jenis Kelamin">
                        
                          <label for="tempat_lahir">tempat lahir</label>
                          <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan Tempat Lahir">

                          <label for="tanggal_lahir">tanggal lahir</label>
                          <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
                        
                          <label for="mata_pelajaran">mata pelajaran</label>
                          <input type="text" class="form-control" id="mata_pelajaran" placeholder="Masukan Mata Pelajaran">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-primary">Simpan</button>
                    </form>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
              </form>
          </nav>
          <table class="table table-striped table-bordered" >
            <thead>
              <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">nip</th>
                <th class="text-center" scope="col">nama</th>
                <th class="text-center" scope="col">jk</th>
                <th class="text-center" scope="col">tempat_lahir</th>
                <th class="text-center" scope="col">tanggal_lahir</th>
                <th class="text-center" scope="col">mata_pelajaran</th>
                <th class="text-center" scope="col" colspan="3">Aksi</th>
              </tr>
            </thead>
            
              <?php $i = 1; ?>
              <?php foreach( $guru as $gru ) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $gru["nip"]; ?></td>
                <td><?= $gru["nama"]; ?></td>
                <td><?= $gru["jk"]; ?></td>
                <td><?= $gru["tempat_lahir"]; ?></td>
                <td><?= $gru["tanggal_lahir"]; ?></td>
                <td><?= $gru["mata_pelajaran"]; ?></td>
                

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
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="fontawesome/js/all.min.js"></script>
  </body>
</html>