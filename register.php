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
      <h1>FORM REGISTRASI</h1>
      <div class="row">
        <div class="col-md-4">
          <form method="post">

  <div>
    <label for="exampleInputEmail1">USERNAME</label>
    <input class="form-control" type="text" name="username" placeholder="USERNAME">
  </div>
  <div>
    <label for="exampleInputPassword1">Password</label>
   <input class="form-control" type="password" name="password" placeholder="PASSWORD">
  </div>
  <div>
    <label for="exampleInputPassword1">Ulangi Password</label>
   <input class="form-control" type="password" name="password" placeholder="PASSWORD">
  </div>
  <div>
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div><br>
    <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
</form>

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
              $username = $_POST["username"];
              $password = $_POST["password"];
              $email = $_POST["email"];


             $data =  mysqli_query($koneksi, "INSERT INTO user VALUES ('','$username','$password','$email')");

             if ($data) {
               echo "<script>
               alert('Registrasi Berhasil')
               document.location.href = 'index.php'
               </script>";
             }
          }

 ?>