<?php 
	include 'includes/connection.php';

	if(isset($_POST['id'])){
		$itemid = $_POST['id'];
		$tsql = sqlsrv_query($conn,"SELECT itemid from itemtaborig where itemid ='$itemid'");
        $row = sqlsrv_fetch_array($tsql);

		echo json_encode($row);
	}
?>