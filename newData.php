<!DOCTYPE html>
<html lang="en">
<head>
  <style>

.form {
  padding-left: 240px;
}
.tombol {
  padding: 10px 0px 20px 450px;
}

</style>
  <title>NEW DATA</title>
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
        <li class="active"><a href="#">Home</a></li>
        <li> <a href="profile.php">PROFILE</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sigup.html"><span class="glyphicon glyphicon-user"></span> REGISTRASI</a></li>
        <li><a href="sigin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="sigin.html"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="header">
<div class="row">
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="img/abror.jpg" alt="">
      <div align="center">
        <table class="table table-striped table-hover">
       </thead>
        <tbody>
     <tr>
      <td><a href="">UBAH FOTO PROFILE</a></td>
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
      <h5 align="center">M. MUSYAHID ABROR</h5>
      <div class="row">
        <div class="col-sm-12">
          <h3 align="center">TAMBAH DATA DIRI MAHASISWA</h3>
        </div>
        <form method="post" enctype="multipart/form-data">
          <div class="form">
        <div class="col-sm-4">
                <label>NAMA DEPAN</label>
                <input class="form-control" name="namadepan" type="text" name="">
                <label>NAMA BELAKANG</label>
                <input class="form-control" name="namabelakang" type="text" name="">
                <label>NIM</label>
                <input class="form-control" name="nim" type="text" name="">
                <label>KELAS</label>
                <input class="form-control" name="kelas" type="text" name="">
                <label>HOBI</label>
                <input class="form-control" name="hobi" type="text" name="">
         </div>

         <div class="col-sm-8">
                <div>
                  <label>GENRE FILM</label>
                </div>
              <input class="form-check-input" name="genre[]" type="checkbox" value="Horor" >
              <label >HOROR</label>
              <input class="form-check-input" name="genre[]" type="checkbox" value="Anime" >
              <label >ANIME</label>
              <input class="form-check-input" name="genre[]" type="checkbox" value="Action" >
              <label >ACTION</label>
              <input class="form-check-input" name="genre[]" type="checkbox" value="Drama" >
              <label >DRAMA</label><br>

              <div>
                  <label>TEMPAT WISATA</label>
                </div>
                 <input class="form-check-input" name="wisata[]" type="checkbox" value="Bali" >
              <label >BALI</label>
              <input class="form-check-input" name="wisata[]" type="checkbox" value="Tanjung Selor" >
              <label >TANJUNG SELOR</label>
              <input class="form-check-input" name="wisata[]" type="checkbox" value="Jakarta" >
              <label >JAKARTA</label>
              <input class="form-check-input" name="wisata[]" type="checkbox" value="Lombok" >
              <label >LOMBOK</label><br>

                <label>TANGGAL LAHIR</label><br>
                <input type="date" name="tgllahir"><br><br>
              <label for="exampleFormControlFile1">UNGGAH FOTO PROFILE</label>
              <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
         </div>
         </div>

  
        
      </div>
    <div class="tombol">
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
          </form>
    </div>

  </div>

</div>
</div>
</body>
</html>

<?php 

include 'koneksi.php';

if (isset($_POST["submit"])) {
  $namadepan = $_POST["namadepan"];
  $namabelakang = $_POST["namabelakang"];
  $nim = $_POST["nim"];
  $kelas = $_POST["kelas"];
  $hobi = $_POST["hobi"];
  $genre = implode(', ', $_POST["genre"]);
  $tgllahir = $_POST["tgllahir"];
  $wisata = implode(', ', $_POST["wisata"]);
  $gambarNama = $_FILES["gambar"]["name"];
  $gambarTemp = $_FILES["gambar"]["tmp_name"];

  $query = mysqli_query($koneksi, "INSERT INTO data VALUES ('$namadepan', '$namabelakang','$nim', '$kelas','$hobi', '$genre', '$wisata', '$tgllahir', '$gambarNama')");

  if ($query) {
    echo "<script>
    alert('Data Berhasil Diinput')
    </script>";
    move_uploaded_file($gambarTemp, 'img/'.$gambarNama);
  }

}



 ?>
