<?php
	include 'includes/connection.php';

	if(isset($_POST['updateprof'])){
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../MyWebsiteCopy/pictures/'.$filename);	
		}
		$accid = $_POST['accid'];
		$photo = $_FILES['photo']['name'];
		$username = $_POST['user'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
						
		$tsql = sqlsrv_query($conn,"UPDATE usertab SET photo='$photo',username='$user',fname='$fname',lname='$lname',email='$email',contact='$contact',address='$address' where accid='$itemid'");
		if(sqlsrv_fetch_array($tsql) < 1){
			$_SESSION['success'] = 'Update Profile Successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
			}
	
}
	else{
		$_SESSION['error'] = '';
	}
	header('location: adminprofile.php');
?>