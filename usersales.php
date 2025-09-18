<?php include 'includes/session1.php'; ?>
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
                  <li><a href="../MyWebsiteCopy/usersales.php" class="nav-item nav-link text-warning font-weight-bold"><i class="fa fa-fw fa-home"></i> SHOP</a></li>    
                  <li><a href="../MyWebsiteCopy/usercart.php" class="nav-item nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-shopping-cart"></i> CART  
                  <?php
                  $tsql = sqlsrv_query($conn,"select count(transid) as [CART] from transtab inner join itemtaborig on transtab.itemid=itemtaborig.itemid inner join usertab on transtab.userid=usertab.accid where usertab.accid='".$user['accid']."' and transtab.status='Order'");
                  
                    while($row = sqlsrv_fetch_array($tsql))
                      
                  if(sqlsrv_has_rows($tsql) > 0){
                    ?>
                <span class="badge bg-info ms-2"><?php echo $row['CART'] ?></span>
                  <?php
                    }else{
                    echo "<h2>Empty</h2>"; 
                    }
                    ?>
              </a></li>
                  <li><a href="#" class="nav-item nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-shopping-basket"></i> BUY</a></li>
                  <li class="dropdown nav-item">
                    <a href="#" class="nav-item nav-link text-warning font-weight-bold dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user-circle"></i> ACCOUNT</a>
                    <ul class="dropdown-menu bg-dark text-center">
                      <li><a href="../MyWebsiteCopy/userprofile.php" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-user"></i> PROFILE</a></li>
                      <li><a href="#" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-key"></i> CHANGE PASS</a></li>
                      <li><a href="userlogout.php" class="nav-link text-warning font-weight-bold "><i class="fa fa-fw fa-window-close"></i> LOG OUT</a></li>
                    </ul>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </div> 
      <!-- nav bar end -->
      <section class="container addproducts ml-auto text-black">
        <h1 class="m-0">SALES ITEM</h1>
        <br>
        <div class="row">
        <?php  
        $tsql = sqlsrv_query($conn,"SELECT * from itemtaborig where itemstatus='APPROVED' order by itembrand asc");
        while($row = sqlsrv_fetch_array($tsql)){

          echo "  
          <div class='col-lg-3 col-6'>
          <!-- small box -->
          <div class='small-box'>
            <div class='inner text-dark font-weight-bold'>
              <h4 class='font-weight-bold'>".$row['itembrand']."</h4>
              <p>".$row['itemname']."</p>
            </div>
            <center>  
            <img width='135.7' height='135.7' src='../MyWebsiteCopy/pictures/".$row['photo']."' class='attachment-woocommerce_thumbnail size-woocommerce_thumbnail' alt='' loading='lazy' srcset=''../MyWebsiteCopy/pictures/".$row['photo']."' 247w, '../MyWebsiteCopy/pictures/".$row['photo']."' 500w, '../MyWebsiteCopy/pictures/".$row['photo']."' 300w, '../MyWebsiteCopy/pictures/".$row['photo']."' 768w, '../MyWebsiteCopy/pictures/".$row['photo']."' 510w, '../MyWebsiteCopy/pictures/".$row['photo']."' 100w, '../MyWebsiteCopy/pictures/".$row['photo']."' 1024w' sizes='(max-width: 135.7) 100vw, 135.7px'>
            </center>
            <br>
            <br>
            <center><a href='../MyWebsiteCopy/userviewdetails.php? item=".($row['itemid'])."' class='btn btn-success'>MORE DETAILS</a></center>
            <br>
            </div>
          </div>
        ";
        }
        ?>
        </div>
      </section>
      <br>
        <footer class="footer">
          <h6 class="text-center">Copyright @ 2022, Design by ENMA </h6>
        </footer>
</body>
</html>