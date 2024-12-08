<?php

$showalert = false;
$showerror = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include "partials/_dbconnect.php";
  $username = $_POST["username"];
  $password = $_POST["Password"];
  $cpassword = $_POST["cpassword"];
  // $exists = false;

  $existsql = "SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn, $existsql);
  $Numexistrows = mysqli_num_rows($result);
  if($Numexistrows > 0){
    // $exists = true;
    $showerror = "username already exist!";

  }
    else{
      // $exists = false;

    if(($password == $cpassword)){
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp())";
      $result = mysqli_query($conn, $sql);
        if($result){
          $showalert = true;
        }
    }
    else{
      $showerror = "Passwords do not match!";
    }
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>
  <?php require "partials/_nav.php" ?>
  <?php
  if($showalert){
    echo '
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can now logg in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if($showerror){
    echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$showerror.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
?>
  <div class="container my-4">
    <h1 class= "text-center">SignUp to our website</h1>
    <form action = "/loginsystem/signup.php" method = "post">
  <div class="form-group my-4">
    <label for="username">Username</label>
    <input type="text" maxlength="15" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" maxlength="15" class="form-control" id="Password" name = "Password">
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name = "cpassword">
    <small id="emailHelp" maxlength="15" class="form-text text-muted">Make sure to type the same password.</small>
  </div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>