<?php
	session_start();
	include('db.inc.php'); 
	db_connect();

	$userID = $_SESSION['ID'];
	$gameID = $_SESSION['gameID'];

	$query = mysql_query("SELECT userRating
 					  FROM Rating
 			 		  WHERE gameID = '$gameID'
 			 		  AND userID = '$userID'");


	$row = mysql_fetch_array($query);

	echo $row['userRating'];

?>