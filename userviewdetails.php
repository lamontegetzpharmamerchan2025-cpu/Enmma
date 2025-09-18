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
      <form method="POST" enctype="multipart/form-data" action="useraddcart.php">
      <section class="container addproducts ml-auto text-black">
        <!-- View Details Start-->
        <?php
              $id=$_GET['item'];
              $tsql = sqlsrv_query($conn,"select * from itemtaborig where itemid='$id' and itemstatus='APPROVED'");
              
                while($row = sqlsrv_fetch_array($tsql))
                  
              if(sqlsrv_has_rows($tsql) > 0){
                ?>
        <div class='cover-pro'>  
            <input type="hidden" class="accountid" name="accountid" value="<?php echo $user['accid']; ?>">
            <input type="hidden" name="Status" value="Order"> 
            <input type="hidden" class="itemid" name="itemid" value="<?php echo $row['itemid']; ?>"> 
            <h1><?php echo $row['itembrand'] ?></h1>
            <h2><?php echo $row['itemname'] ?></h2>
            <br>
            <div id='box' class='detail-pro'>
            <img src='../MyWebsiteCopy/pictures/<?php echo $row['photo'] ?>' style='width:300px; height:200px'/><div class='laptop-img-detail'>
            <br>  
            <h2>Php-<?php echo $row['itemprice'] ?></h2>
            </div>
            </div>    
            <br>
            <div id='box' class='detail-pro'>
            </div>
            <div class="input-group">
              <input type="button" value="-" class="button-minus icon-shape icon-sm" data-field="quantity">
              <input type="number" step="1" max="10" value="0" name="quantity" class="quantity-field border-0 text-center">
              <input type="button" value="+" class="button-plus icon-shape icon-sm" data-field="quantity">
            </div>
            <br>
            <button type="submit" href='../MyWebsiteCopy/usersales.php' class='btn btn-primary'>BACK TO LIST ITEM</button>
            <button type="submit" class='btn btn-success' name='addcart1'>ADD TO CART</button>
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
      </form>
      <br>
        <footer class="footer">
          <h6 class="text-center">Copyright @ 2022, Design by ENMA </h6>
        </footer>        
<script>
  function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    $('.input-group').on('click', '.button-plus', function(e) {
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });
          </script>        
</body>
</html>