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
    <link rel="shortcut icon" href="./pictures/Enmma.png" type="image/x-icon">
</head>
<body> 
      <!-- visible for users--> 
      <!-- nav bar start -->
      <div class="bgimgadmin1">
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
      <!-- dashboard start-->
      <section class="container dashboardmain ml-auto text-black">
                <h1 class="m-0">DASHBOARD</h1>
                <br>
            <!-- Small boxes (Stat box) -->
            <?php
              $tsql = sqlsrv_query($conn,"select count(itemid) as [APPROVED] from itemtaborig where itemstatus='APPROVED'");
              
                while($row = sqlsrv_fetch_array($tsql))
                  
              if(sqlsrv_has_rows($tsql) > 0){
                ?>
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?php echo $row['APPROVED'] ?></h3>
                    <p>Sales</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-cart"></i>
                  </div>
                  <a href="../MyWebsiteCopy/adminsales.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <?php

                        }else{
                         echo "<h2>Empty</h2>"; 
                        }
                      
                        ?>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>0</h3>
                    <p>Deliver</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-car"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <?php
              $tsql = sqlsrv_query($conn,"select count(accid) as [USER] from usertab where userlevel='User'");
              
                while($row = sqlsrv_fetch_array($tsql))
                  
              if(sqlsrv_has_rows($tsql) > 0){
                ?>
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3><?php echo $row['USER'] ?></h3>

                    <p>User Registrations</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="../MyWebsiteCopy/admincustomer.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <?php

                        }else{
                         echo "<h2>Empty</h2>"; 
                        }
                      
                        ?>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <?php
              $tsql = sqlsrv_query($conn,"select count(itemid) as [DECLINE] from itemtaborig where itemstatus='NOTPOST'");
              
                while($row = sqlsrv_fetch_array($tsql))
                  
              if(sqlsrv_has_rows($tsql) > 0){
                ?>
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3><?php echo $row['DECLINE'] ?></h3>

                    <p>For Approval</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-briefcase"></i>
                  </div>
                  <a href="../MyWebsiteCopy/approvedecline.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <?php

                        }else{
                        echo "<h2>Empty</h2>"; 
                        }

                        ?>
              <!-- ./col -->
            </div>
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <div class="col-lg-4 col-10">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-chart-pie mr-1"></i>
                      Sales
                    </h3>
                    <div class="card-tools">
                      <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                          <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                        </li>
                      </ul>
                    </div>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart"
                          style="position: relative; height: 300px;">
                          <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                      </div>
                      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                      </div>
                    </div>
                  </div><!-- /.card-body -->
                </div>
                      </div>  
                <!-- /.card -->

                <!-- Map card -->
                <div class="col-lg-4 col-10">
                <div class="card bg-gradient-secondary">
                  <div class="card-header border-0">
                    <h3 class="card-title">
                      <i class="fas fa-map-marker-alt mr-1"></i>
                      Visitors
                    </h3>
                    <!-- card tools -->
                    <div class="card-tools">
                      <button type="button" class="btn btn-secondary btn-sm daterange" title="Date range">
                        <i class="far fa-calendar-alt"></i>
                      </button>
                      <button type="button" class="btn btn-secondary btn-sm" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <div class="card-body">
                    <div id="world-map" style="height: 250px; width: 100%;"></div>
                  </div>
                  <!-- /.card-body-->
                  <div class="card-footer bg-transparent">
                    <div class="row">
                      <div class="col-4 text-center">
                        <div id="sparkline-1"></div>
                        <div class="text-white">Visitors</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-4 text-center">
                        <div id="sparkline-2"></div>
                        <div class="text-white">Online</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-4 text-center">
                        <div id="sparkline-3"></div>
                        <div class="text-white">Sales</div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->
                  </div>
                </div>
                      </div>
                <!-- Calendar -->
                <div class="col-lg-4 col-10">
                <div class="card bg-gradient-dark">
                  <div class="card-header border-0">

                    <h3 class="card-title">
                      <i class="far fa-calendar-alt"></i>
                      Calendar
                    </h3>
                    <!-- tools card -->
                    <div class="card-tools">
                      <!-- button with a dropdown -->
                      <div class="btn-group">
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                          <i class="fas fa-bars"></i>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <a href="#" class="dropdown-item">Add new event</a>
                          <a href="#" class="dropdown-item">Clear events</a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">View calendar</a>
                        </div>
                      </div>
                      <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-dark btn-sm" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                    <!-- /. tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body pt-0">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                  </div>
                  <!-- /.card-body -->
                </div>
                      </div>
                <!-- /.card -->
              <!-- right col -->
            </div>
            <!-- /.row (main row) -->
      </section> 
      <!-- dashboard end -->
      <br>
        <footer class="footer">
          <h6 class="text-center">Copyright @ 2022, Design by ENMA </h6>
        </footer>
</body>
</html>