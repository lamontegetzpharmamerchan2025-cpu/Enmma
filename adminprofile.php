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
      <div class="bgimgapprovedecline">
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
      <!-- approve/decline start -->
      <section class="container addproducts ml-auto text-black">
        <h1 class="m-0">ACCOUNT PROFILE</h1>
        <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header font-weight-bold">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img width='135.7' height='135.7' src='../MyWebsiteCopy/pictures/<?php echo $user['photo'] ?>">' class='img-circle attachment-woocommerce_thumbnail size-woocommerce_thumbnail' alt='' loading='lazy' srcset='../MyWebsiteCopy/pictures/<?php echo $user['photo'] ?>' 247w, sizes='(max-width: 135.7) 100vw, 135.7px'>
                    <!-- <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Upload Profile Picture</label>
                            <input type="file" name="photo">
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header font-weight-bold">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="id" type="hidden" value="<?php echo $user['accid'] ?>">
                            <input class="form-control" id="user" type="text" value="<?php echo $user['username'] ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="fname" type="text" value="<?php echo $user['fname'] ?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="lname" type="text" value="<?php echo $user['lname'] ?>">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (email)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputEmail">Email Address</label>
                                <input class="form-control" id="email" type="email" value="<?php echo $user['email'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="contact" type="text" value="<?php echo $user['contact'] ?>">
                            </div>
                        </div>
                        <!-- Form Group (address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAddress">Address</label>
                            <input class="form-control" id="address" type="text" value="<?php echo $user['address'] ?>">
                        </div>
                        <!-- Save changes button-->
                        <!-- <button class="btn btn-success" type="button" name="updateprof">Save Changes</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <br>
        <footer class="footer">
          <h6 class="text-center">Copyright @ 2022, Design by ENMMA </h6>
        </footer>                    
</body>
</html>