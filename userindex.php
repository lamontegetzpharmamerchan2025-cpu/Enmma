<?php
  session_start();
  if(isset($_SESSION['user'])){
    header('location:usersales.php');
  }
?>
<!DOCTYPE html> 
<html>
<head>
    <title>ENMMA</title>
    <!-- files,css, javascripts - not visible for users -->
    <link rel="stylesheet" type="text/css" href="css/admin.css" >
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="shortcut icon" href="./pictures/Enmma.png" type="image/x-icon">
</head>
<body> 
      <!-- visible for users--> 
      <!-- nav bar start -->
      <div class="bgimguser">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top scrolling-navbar top-nav-collapse pt-3 pb-3">
          <div class="container">
            <a class="navbar-brand text-warning font-weight-bold" href="../MyWebsiteCopy/index.php" class="nav-link text-warning font-weight-bold">ENMMA</a>
          </div>
        </nav>
      </div>
        <!-- nav bar end -->
        <!-- login start -->
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="userlogin.php" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal text-warning font-weight-bold mb-0 me-3">Follow Us In Our Social Networks</p>
            <button type="button" class="text-warning btn btn-dark btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="text-warning btn btn-dark btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="text-warning btn btn-dark btn-floating mx-1">
              <i class="fab fa-instagram"></i>
            </button>

          </div>

          <div class="divider d-flex align-items-center my-4">
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="user" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="username">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="pass" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="password">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="userlogin" class="btn btn-dark text-warning font-weight-bold btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger text-warning">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
    <!-- Copyright -->
    <div class="text-warning font-weight-bold mb-3 mb-md-0">
      Copyright © 2020. Design by Enmma
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-warning me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-warning me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-warning me-4">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>     
</body>

</html>