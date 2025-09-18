<?php
		session_start();
		include 'includes/connection.php';
	
		if(isset($_POST['adminlogin'])){
		$Username = $_POST['user'];
		$Password = $_POST['pass'];

		$check = sqlsrv_query($conn,"SELECT * FROM usertab WHERE username = '$Username' and pass = '$Password' and userlevel='User'");
		

		if(sqlsrv_has_rows($check) < 1){
			$_SESSION['error'] = 'Incorrect';
		}
		else{
			$row = sqlsrv_fetch_array($check);
			if(password_verify($Password, $row['pass'])){
				$_SESSION['error'] = 'Incorrect Password';
			}
			else{
				
				$_SESSION['accid'] = $current_user_id;		
				$_SESSION['admin'] = $row['accid'];
			}
		}
		
	}
	header('location: adminindex.php');

?>