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
      <h1 class="m-0">SHOPPING CART</h1>
      <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                <?php      
        $tsql = sqlsrv_query($conn,"select itemtaborig.photo,itemname,itembrand,itemprice from transtab inner join itemtaborig on transtab.itemid=itemtaborig.itemid inner join usertab on transtab.userid=usertab.accid where usertab.accid='".$user['accid']."' and transtab.status='Order'");
        while($row = sqlsrv_fetch_array($tsql))

          if(sqlsrv_has_rows($tsql) > 0){
            ?>  
                
                  <tr>
                    <th scope='row'>
                      <div class='d-flex align-items-center'>
                        <img src='../MyWebsiteCopy/pictures/<?php echo $row['photo'] ?>' class='img-fluid rounded-3'
                          style='width: 120px;' alt=''>
                      </div>
                    </th>
                    <td class='align-middle'>
                      <p class='mb-0' style='font-weight: 500;'><?php echo $row['itemname'] ?></p>
                    </td>
                    <td class='align-middle'>
                      <p class='mb-0' style='font-weight: 500;'><?php echo $row['itembrand'] ?></p>
                    </td>
                    
                    <td class='align-middle'>
                      <p class='mb-0' style='font-weight: 500;'>₱ <?php echo $row['itemprice'] ?></p>
                    </td>
                  </tr>
               
              <?php
            }
            ?>
             </tbody>
              </table>
            </div>
            <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
              <div class="card-body p-4">

                <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                    <form>
                      <div class="d-flex flex-row pb-3">
                        <div class="d-flex align-items-center pe-2">
                          <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                            value="" aria-label="..." checked />
                        </div>
                        <div class="rounded border w-100 p-3">
                          <p class="d-flex align-items-center mb-0">
                            <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i> Gcash
                          </p>
                        </div>
                      </div>
                      <div class="d-flex flex-row pb-3">
                        <div class="d-flex align-items-center pe-2">
                          <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                            value="" aria-label="..." />
                        </div>
                        <div class="rounded border w-100 p-3">
                          <p class="d-flex align-items-center mb-0">
                            <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i> Paymaya
                          </p>
                        </div>
                      </div>
                      <div class="d-flex flex-row">
                        <div class="d-flex align-items-center pe-2">
                          <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v"
                            value="" aria-label="..." />
                        </div>
                        <div class="rounded border w-100 p-3">
                          <p class="d-flex align-items-center mb-0">
                            <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i> Cash on Delivery
                          </p>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xl-6">
                    <div class="row">
                      <div class="col-12 col-xl-6">
                        <div class="form-outline mb-4 mb-xl-5">
                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                            placeholder="Name" />
                          <label class="form-label" for="typeName">Name on card</label>
                        </div>

                        <div class="form-outline mb-4 mb-xl-5">
                          <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY"
                            size="7" id="exp" minlength="7" maxlength="7" />
                          <label class="form-label" for="typeExp">Expiration</label>
                        </div>
                      </div>
                      <div class="col-12 col-xl-6">
                        <div class="form-outline mb-4 mb-xl-5">
                          <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                            placeholder="0000 0000 0000 0000" minlength="19" maxlength="19" />
                          <label class="form-label" for="typeText">Card Number</label>
                        </div>

                        <div class="form-outline mb-4 mb-xl-5">
                          <input type="password" id="typeText" class="form-control form-control-lg"
                            placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                          <label class="form-label" for="typeText">Cvv</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xl-3">
                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">$23.49</p>
                    </div>

                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                      <p class="mb-0">Shipping</p>
                      <p class="mb-0">$2.99</p>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                      <p class="mb-2">Total (tax included)</p>
                      <p class="mb-2">$26.48</p>
                    </div>

                    <button type="button" class="btn btn-primary btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>Checkout</span>
                        <span>$26.48</span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  
      <br>
        <footer class="footer">
          <h6 class="text-center">Copyright @ 2022, Design by ENMA </h6>
        </footer>
</body>
</html>