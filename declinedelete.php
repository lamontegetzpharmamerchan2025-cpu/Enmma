
<?php
	include 'includes/connection.php';

	if(isset($_POST['decline'])){
		$itemid = $_POST['itemid2'];			
		$tsql = sqlsrv_query($conn,"DELETE FROM itemtaborig where itemid='$itemid'");
		if(sqlsrv_fetch_array($tsql) < 1){
			$_SESSION['success'] = 'Decline Successfully';
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
