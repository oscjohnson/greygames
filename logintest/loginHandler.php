<?php
	session_start();
	include('db.inc.php'); 
	db_connect();

	$username = $_GET['username'];
	$password = $_GET['password'];


	$query = mysql_query("SELECT * FROM User WHERE mail='$username' AND password='$password'");

	
	if(mysql_num_rows($query) != 0){
		$_SESSION['username'] = $username;

		print"<script> parent.jQuery.fancybox.close();
			 window.top.location.href = 'index.php';
		</script>";
	}
	else{
		echo "Wrong";	
	}
	//if($username == 'oscar'){ echo hello;}

?>