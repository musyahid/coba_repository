<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
      <h1>FORM LOGIN</h1>
      <div class="row">
        <div class="col-md-4">
          <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">USERNAME</label>
    <input class="form-control" type="text" name="username" placeholder="USERNAME">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
   <input class="form-control" type="password" name="password" placeholder="PASSWORD">
  </div>
  <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
</form>
  <h4>Registeri <a href="register.php">DISINI</a></h4>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

include 'koneksi.php';

  if (isset($_POST["kirim"])) {
    $username =$_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $login = mysqli_num_rows($query);

    if ($login > 0) {
      echo "<script>
      alert('Berhasil Login')
      document.location.href = 'dashboard.php'
      </script>";
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['status'] = "login";
    }else {
      echo "Gagal Login";
    }
  }

 ?>