<?php
	session_start();
	include('db.inc.php'); 
	db_connect();

	$username = $_GET['username'];
	$password = $_GET['password'];


	$query = mysql_query("SELECT * FROM User WHERE mail='$username' AND password='$password'");
	$dataRow = mysql_fetch_array($query);
	
	if(mysql_num_rows($query) != 0){
		$_SESSION['username'] = $username;
		$_SESSION['ID'] = $dataRow['ID'];

		print"<script> parent.jQuery.fancybox.close();
			 window.top.location.href = window.top.location.href;
		</script>";
	}
	else{
		print"<script>
			 window.location.href = 'faillogin.php';
		</script>";
	}
	//if($username == 'oscar'){ echo hello;}

?>