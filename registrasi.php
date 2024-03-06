<?php 
require 'function.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
        alert('user baru berhasil ditambahkan');
          document.location.href = 'login.php';
        </script>";
  }
  else{
    echo mysqli_error($conn);
  }
}



  ?>

  <!DOCTYPE html>
 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="registrasi.css">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <title>login</title>
  </head>
  <div class="container bg-light">
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

  <title>Registrasi</title>
   </head>
  <body class="bg-dark">
    <div class="container bg-light">
      <from class="form-group" method="">
        <div class="input-group mb-2 mr-sm-2">       
  </div>
  <div class="text-center">
 <h2>REGISTRASI</h2>
</div>
 <form method="post" action="" class="pt-5 pl-5">
 <ul>
  <li><label for="username">Username</label></li>
  <li><input type="text" name="username" id="username"></li>
  <li><label for="password">Password</label></li>
  <li><input type="password" name="password" id="password"></li>
  <li><label for="password2">konfirmasi password</label></li>
  <li><input type="password" name="password2" id="password2"></li>
  <br>
  <li><button type="submit" name="register" class="btn btn-primary">REGISTER</button></li>
  </ul>
 </form>
 </body>
 </html>


  </head>
  <body class="bg-warning">
    <div class="container bg-light">
      <from class="form-group" method="">
        
   
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