<!DOCTYPE html>
<html lang="en">
<head>
  <style>
</style>
  <title>PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MI.COM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">PROFILE</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> REGISTRASI</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="header">
<div class="row">
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="img/abror.jpg" alt="">
      <div>
        <table class="table table-striped table-hover">
       </thead>
        <tbody>
     <tr>
    </tr>
    <tr>
      <td>M. MUSYAHID ABROR</td>
    </tr>
 </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="thumbnail">
     
       

 <?php 
      session_start(); 
      if ($_SESSION['status'] != "login") {
      header("location:index.php");
    } else {
      echo  "<b>USERNAME ANDA : </b> ".$_SESSION['username'];
    }
      ?>


      <div class="row">

        <div class="col-sm-5">
          <h3>DATA DIRI ANDA</h3>
          <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>NAMA LENGKAP</th>
        <th>:</th>
        <th>KELAS</th>
      </tr>

      <tr>
        <th>NIM</th>
        <th>:</th>
        <th>KELAS</th>
      </tr>

      <tr>
        <th>KELAS</th>
        <th>:</th>
        <th>KELAS</th>
      </tr>

      <tr>
        <th>HOBI</th>
        <th>:</th>
        <th>KELAS</th>
      </tr>

      <tr>
        <th>GENRE FILM</th>
        <th>:</th>
        <th>KELAS</th>
      </tr>

      <tr>
        <th>TEMPAT WISATA</th>
        <th>:</th>
        <th>KELAS</th>
      </tr>

      <tr>
        <th>TANGGAL LAHIR</th>
        <th>:</th>
        <th>KELAS</th>
      </tr>
    </thead>
  </table>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</body>
</html>

