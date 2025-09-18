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
      <!-- add form start -->
    <section class="container addproducts ml-auto text-black">
      <h1 class="m-0">MANAGE STORE</h1>
      <h6 class="m-0">(LAPTOPS)</h6>
      <br>
      <form method="POST" enctype="multipart/form-data" action="laptop_add.php">
        <div class="form-row">
            <div class="form-group col-md-6" >
              <label for="itemname">Item Name</label>
              <input type="text" class="form-control" name="itemname" id="itemname" placeholder="Item Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="itembrand">Item Brand</label>
              <select name="itembrand" id="itembrand" class="form-control" required>
              <option selected></option>
                <option>APPLE</option>
                <option>ASUS</option>
                <option>ACER</option>
                <option>DELL</option>
                <option>HP</option>
                <option>HUAWEI</option>
                <option>LENOVO</option>
                <option>MSI</option>
                <option>SAMSUNG</option>
              </select>
            </div>
          </div>
          <div class="form-group" >
              <label for="itemdesc">Item Description</label>
              <textarea class="form-control" name="itemdesc" id="itemdesc" rows="5" required></textarea>
            </div>
          <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="itemcat">Item Category</label>
                  <select name="itemcat" id="itemcat" class="form-control" required>
                  <option selected></option>
                    <option>Rare Item</option>
                    <option>Premium Item</option>
                    <option>Classsic Item</option>
                  </select>
                </div>
            <div class="form-group col-md-4">
              <label for="itemprice">Item Price</label>
              <input type="text" class="form-control" name="itemprice" id="itemprice" placeholder="Item Price" required>
              <input type="hidden" class="form-control" name="itemtype" id="itemtype" value="Laptop">
              <input type="hidden" class="form-control" name="itemstatus" id="itemstatus" value="NOTPOST">
            </div>
            <div class="form-group col-md-4">
            <label for="itempic">Item Picture</label>
            <div class="form-group col-md-4">
            <input type="file" name="photo">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success" name="addlaptop">ADD ITEM</button>
        <button type="button" class="btn btn-warning" >CANCEL</button>
      </form>
    </section>
      <!-- add form end -->

      <!-- addtable form start -->
      <section class="container addproductstables ml-auto text-black">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th class="text-warning" scope="col">Name</th>
                <th class="text-warning" scope="col">Brand</th>
                <th class="text-warning" scope="col">Price</th>
              </tr>
            </thead>
            <tbody>         
            <?php
                    $tsql = sqlsrv_query($conn,"SELECT * from itemtaborig WHERE itemtype='Laptop' and itemstatus='NOTPOST'");
                     while($row = sqlsrv_fetch_array($tsql)){
                    
                      
                      echo "
                        <tr>
                          <td>".$row['itemname']."</td>
                          <td>".$row['itembrand']."</td>
                          <td>".$row['itemprice']."</td>        
                        </tr>
                      ";
                    }
                  ?> 
            </tbody>
          </table>
      </section>  
      <br>
        <footer class="footer">
          <h6 class="text-center">Copyright @ 2022, Design by ENMA </h6>
        </footer>
</body>

</html>