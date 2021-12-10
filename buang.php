<?php session_start();
//Aktifkan session

require 'config/koneksi.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Aplikasi 3 Serangkai | Pengadilan Agama Mataram</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card">
                    <div class="row">
                        <div class="col-md-5 detail-part">
                            <h1>Aplikasi<br>3 Serangkai</h1><br><br><br><br><br><br><br><br><br><br><p>Please use your credentials to login.
                                If you are not a member, please register. </p>
                        </div>
                        <div class="col-md-7 logn-part">
                          <div class="row">
                              <div class="col-lg-10 col-md-12 mx-auto">
                                  <div class="logo-cover">
                                       <img src="assets/images/logologin.jpg" alt="">
                                   </div>
	    <!--Jika terjadi login error tampilkan pesan ini-->
           <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Selamat Datang <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>
      <div class="login-box">
        <form class="login-form" action="proses_login.php" method="post">
          <h6 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN SISTEM</h6>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" name="user" placeholder="Username" required="" autocomplete="off" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">STATUS</label>		  
            <select name="level" class="form-control" required="">
                <option value="1">1. Admin PA Mataram</option>
                <option value="2">2. Admin Dukcapil</option>
                <option value="3">3. Admin KUA</option>
            </select>
          </div>		  
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="pwd" placeholder="Password" required="" autocomplete="off">
          </div>	  
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw" type="submit" name="login" value="login"></i>PROSES</button>
          </div>
        </form>
                               </div>
                          </div>
                           
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>