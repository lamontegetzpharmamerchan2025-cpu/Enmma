<?php include 'includes/session.php'; ?>
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
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="shortcut icon" href="./pictures/Enmma.png" type="image/x-icon">
</head>
<body> 
      <!-- visible for users--> 
      <!-- nav bar start -->
      <div class="bgimgadminlaptop">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top scrolling-navbar top-nav-collapse pt-3 pb-3">
          <div class="container">
            <a class="navbar-brand text-warning font-weight-bold ">ENMMA</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav text-white ml-auto">
                   <li><a href="../MyWebsiteCopy/admindashboard.php" class="nav-item nav-link text-warning font-weight-bold"><i class="fa fa-fw fa-area-chart"></i> DASHBOARD</a></li>
                <li class="dropdown nav-item">
                  <a href="#" class="nav-item nav-link text-warning font-weight-bold dropdown-toggle " data-toggle="dropdown"><i class="fa fa-fw fa-home"></i> MANAGE STORE</a>
                  <ul class="dropdown-menu bg-dark text-center">
                    <li><a href="../MyWebsiteCopy/approvedecline.php" class="nav-link text-warning font-weight-bold ">APPROVE/DECLINE</a></li>
                    <li><a href="../MyWebsiteCopy/adminsales.php" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-shopping-cart"></i> SALES</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-shopping-bag"></i> SOLD</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-truck"></i> DELIVERY</a></li>
                  </ul>
                </li>  
                <li class="dropdown nav-item">
                  <a href="#" class="nav-item nav-link text-warning font-weight-bold dropdown-toggle " data-toggle="dropdown"><i class="fa fa-fw fa-shopping-basket"></i> PRODUCTS</a>
                  <ul class="dropdown-menu bg-dark text-center">
                    <li><a href="../MyWebsiteCopy/adminaddlaptop.php" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-laptop"></i> LAPTOP</a></li>
                    <li><a href="../MyWebsiteCopy/adminaddcellphone.php" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-mobile"></i> PHONES</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-tablet"></i> TABLET</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-clock-o"></i> WATCH</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-desktop"></i> MONITOR</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-music"></i> SPEAKER</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-keyboard-o"></i> KEYBOARD</a></li>
                    <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-mouse-pointer"></i> MOUSE</a></li>
                  </ul>
                </li>  
                  <li><a href="../MyWebsiteCopy/admincustomer.php" class="nav-item nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-users"></i> CUSTOMER</a></li>
                  <li class="dropdown nav-item">
                    <a href="#" class="nav-item nav-link text-warning font-weight-bold dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user-circle"></i> ACCOUNT</a>
                    <ul class="dropdown-menu bg-dark text-center">
                      <li><a href="../MyWebsiteCopy/adminprofile.php" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-user"></i> PROFILE</a></li>
                      <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-key"></i> CHANGE PASS</a></li>
                      <li><a href="../MyWebsiteCopy/adminlogout.php" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-window-close"></i> LOG OUT</a></li>
                    </ul>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </div> 
      <!-- nav bar end -->
      <section class="container addproducts ml-auto text-black">
        <!-- View Details Start-->
        <?php
              $id=$_GET['item'];
              $tsql = sqlsrv_query($conn,"select * from itemtaborig where itemid='$id' and itemstatus='APPROVED'");
              
                while($row = sqlsrv_fetch_array($tsql))
                  
              if(sqlsrv_has_rows($tsql) > 0){
                ?>
        <div class='cover-pro'>
            <h1><?php echo $row['itembrand'] ?></h1>
            <h2><?php echo $row['itemname'] ?></h2>
            <br>
            <div id='box' class='detail-pro'>
            <img src='../MyWebsiteCopy/pictures/<?php echo $row['photo'] ?>' style='width:300px; height:200px'/><div class='laptop-img-detail'>
            <br>
            <h2>Php-<?php echo $row['itemprice'] ?></h2>
            </div>
            </div>    
            <div id='box' class='detail-pro'>
            </div>
            <br>
            <a href='../MyWebsiteCopy/adminsales.php' class='btn btn-success'>BACK TO LIST ITEM</a>
            <br>
            <br>
            <div class='cover'>
            <h3>Overview</h3>
            <span id='description'><p>            </p></span>
            </div>
            <h5>Full Specification</h5>
            <div>
            <div><p><?php echo $row['itemdesc'] ?></p></div>
            <?php
            }
            ?>
        </div>
        <!-- View Details End-->
      </section>
      <br>
        <footer class="footer">
          <h6 class="text-center">Copyright @ 2022, Design by ENMA </h6>
        </footer>        
</body>
</html>