<?php 

session_start();

include ('../database.php');
if(isset($_POST["login"])){
  $username =$_POST['username'];
  $password =$_POST['password'];
     $query=mysqli_query($db,"SELECT * from admin where username='$username'and pass='$password'");
 if(mysqli_num_rows($query)==1){
   $_SESSION['FAZA']=TRUE;
   $_SESSION['data']=$row['id_admin'];
   header('location:index.php');
   exit();
     }
     $naufal=true;
  }


 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin Elma Hijab </title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><center>Login Admin </center></div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" class="form-control" placeholder="Username" name="username" required="required" autofocus="autofocus">
                <label for="input">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <div Class="input-group">
              </div>
            </div>
            <br>
            <?php if (isset($naufal)):?>
                <div class="alert alert-danger">
                  <p><center>Username atau password salah<br>Please check your password and username again</center></p>
                </div>
            <?php endif ?>
              <br>
              <br>

            <center><input type="submit" name="login" value="LOGIN"></center>
          </form>
        </div>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
