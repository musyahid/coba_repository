<?php 

    session_start();
    if ($_SESSION['status'] != "login") {
      header("location:index.php");
    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
</style>
  <title>PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
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
        <li class="active"><a href="#">DASHBOARD</a></li>
        <li><a href="profile.php">PROFILE</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> REGISTRASI</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="header">
       <h3>DATA MAHASISWA</h3>
    </div>

  

    <div class="container">
      <div class="cari" >
        <form method="get">
      <div class="col-sm-3">
          <input class="form-control" type="text" name="cari" placeholder="Cari berdasarkan NIM">
      </div>
      <div class="col-sm-2">
         <button type="submit" class="btn btn-primary" name="pencarian">CARI</button>
      </div>
      </form>
    </div>
   
             
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>NAMA LENGKAP</th>
        <th>NIM</th>
        <th>KELAS</th>
        <th>HOBI</th>
        <th>GENRE FILM</th>
        <th>TEMPAT WISATA</th>
        <th>TANGGAL LAHIR</th>
        <th>GAMBAR</th>
        <th>AKSI</th>
      </tr>
    </thead>

    <?php 

    include 'koneksi.php';

    if (isset($_GET["pencarian"])) {
      $nim = $_GET["cari"];

      $query = mysqli_query($koneksi, "SELECT CONCAT(nama_depan,' ',nama_belakang) AS 'Nama Lengkap', nim, kelas, hobi, genre_film, tempat_wisata, tanggal_lahir, gambar FROM data WHERE nim LIKE '%$nim%' OR nama_depan LIKE '%$nim%' ");
    } else{
      $query = mysqli_query($koneksi, "SELECT CONCAT(nama_depan,' ',nama_belakang) AS 'Nama Lengkap', nim, kelas, hobi, genre_film, tempat_wisata, tanggal_lahir, gambar FROM data");
    }


    while ($data = mysqli_fetch_assoc($query)) { 

      $tanggal = $data["tanggal_lahir"];


      ?>
    <tbody>
      <tr>
        <td><?php echo $data["Nama Lengkap"];  ?></td>
        <td><?php echo $data["nim"]; ?></td>
        <td><?php echo $data["kelas"]; ?></td>
        <td><?php echo $data["hobi"]; ?></td>
        <td><?php echo $data["genre_film"]; ?></td>
        <td><?php echo $data["tempat_wisata"]; ?></td>
        <td><?php echo date("d/m/Y", strtotime($tanggal)); ?></td>
        <td><img src="<?php echo "img/".$data["gambar"]; ?>"></td>
        <td><a href="info.php?nim=<?php echo $data["nim"] ?>"><button type="button" class="btn btn-warning">INFO</button></a></td>
      </tr>
    </tbody>
  <?php } ?>
  </table> 
</div>

</body>
</html>
<?php 


 ?>

