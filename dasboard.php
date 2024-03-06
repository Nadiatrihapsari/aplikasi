

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

    <title>SISFO SMK PUTRA GUNUNGHALU</title>
  </head>
  <body>
  

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
    <div class="col-md-10 p-5 pt-2">
     <h3> <i class="fas fa-tachometer-alt mr-2"></i> SISFO SMK PUTRA GUNUNGHALU</h3><hr>
     <div class="row text-white">
       <div class="card bg-info ml-3" style="width: 18rem;">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-user-graduate mr-2"></i>
        </div>
        <h5 class="card-title">JUMLAH SISWA</h5>
        <div class="display-4">481</div>
       <a href=""><p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
      </div>
    </div>
    
     <div class="card bg-success ml-3" style="width: 18rem;">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-chalkboard-teacher mr-2"></i> 
        </div>
        <h5 class="card-title">JUMLAH GURU</h5>
        <div class="display-4">23</div>
       <a href=""><p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
      </div>
    </div>

     <div class="card bg-danger ml-3" style="width: 18rem;">
      <div class="card-body">
        <div class="card-body-icon">
         <i class="fas fa-user-edit mr-2"></i>
        </div>
        <h5 class="card-title">JUMLAH PEGAWAI</h5>
        <div class="display-4">2</div>
       <a href=""><p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="card ml-3 text-white text-center" style="width: 18rem;">
      <div class="card-header bg-danger display-4 pt-4 pb-4">
       <i class="fab fa-instagram"></i>
      </div>
      <div class="card-body">
        <h5 class="card-title text-danger">INSTAGRAM</h5>
        <a href="#" class="btn btn-danger">FOLLOW</a>
      </div>
    </div>
    <div class="card ml-3 text-white text-center" style="width: 18rem;">
      <div class="card-header bg-info display-4 pt-4 pb-4">
       <i class="fab fa-facebook"></i>
      </div>
      <div class="card-body">
        <h5 class="card-title text-info">FACEBOOK</h5>
        <a href="#" class="btn btn-info">LIKE</a>
      </div>
    </div>
     <div class="card ml-3 text-white text-center" style="width: 18rem;">
      <div class="card-header bg-success display-4 pt-4 pb-4">
       <i class="fab fa-twitter"></i>
      </div>
      <div class="card-body">
        <h5 class="card-title text-success">TWITTER</h5>
        <a href="#" class="btn btn-success">FOLLOW</a>
      </div>
    </div>
  </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>