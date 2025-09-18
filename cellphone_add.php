<?php
	include 'includes/connection.php';
$msg="";
	if(isset($_POST['addcellphone'])){
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../MyWebsiteCopy/pictures/'.$filename);	
		}
		$photo = $_FILES['photo']['name'];
		$item_name = $_POST['itemname'];
		$item_brand = $_POST['itembrand'];
		$item_desc = $_POST['itemdesc'];
		$item_cat = $_POST['itemcat'];
		$item_price = $_POST['itemprice'];
        $item_type = $_POST['itemtype'];
		$item_status = $_POST['itemstatus'];

		$tsql = sqlsrv_query($conn,"INSERT INTO itemtaborig(photo,itemname,itembrand,itemdesc,itemcat,itemprice,itemtype,itemstatus)
		VALUES('$photo','$item_name','$item_brand','$item_desc','$item_cat','$item_price','$item_type','$item_status')");
	
		if(sqlsrv_fetch_array($tsql) < 1){
			$_SESSION['success'] = 'New Item Add Successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
			}
	
}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	header('location: adminaddcellphone.php');
?>
