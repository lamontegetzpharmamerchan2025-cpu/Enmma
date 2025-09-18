
<?php
	include 'includes/connection.php';

	if(isset($_POST['approve'])){
		$itemstatus = $_POST['itemstatus'];
		$itemid = $_POST['itemid1'];			
		$tsql = sqlsrv_query($conn,"UPDATE itemtaborig SET itemstatus='$itemstatus' where itemid='$itemid'");
		if(sqlsrv_fetch_array($tsql) < 1){
			$_SESSION['success'] = 'Approved Successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
			}
	
}
	else{
		$_SESSION['error'] = '';
	}
	header('location: approvedecline.php');
?>
