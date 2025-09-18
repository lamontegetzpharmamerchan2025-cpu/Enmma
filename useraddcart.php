<?php
	include 'includes/session1.php';

	if(isset($_POST['addcart1'])){
		$accid = $_POST['accountid'];
		$itemid = $_POST['itemid'];
		$quantity = $_POST['quantity'];
		$status = $_POST['Status'];

		$sql = sqlsrv_query($conn,"INSERT INTO transtab(userid,itemid,quantity,status) 
		VALUES ('$accid','$itemid','$quantity','$status')");
		if(sqlsrv_fetch_array($tsql) < 1){
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	
		}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	header('location: usersales.php');
	include 'includes/usersales.php';
?>