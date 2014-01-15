<?php
	session_start();
	include('db.inc.php'); 
	db_connect();

	if(isset($_SESSION['username']))
	{

		$userID = $_SESSION['ID'];
		$gameID = $_SESSION['gameID'];
		$rating = $_POST['rating'];

	$query = mysql_query("SELECT COUNT(*)
 					  FROM Rating
 			 		  WHERE gameID = '$gameID'
 			 		  AND userID = '$userID'");


		if(mysql_result($query,0) == 0)
		{
			mysql_query("INSERT INTO Rating(userID, gameId,userRating) VALUES('$userID','$gameID', $rating)");
		}


		else mysql_query("UPDATE Rating SET userRating = '$rating'
						 WHERE userID = '$userID' AND gameID = '$gameID'");

			echo $rating;
	}

	else
	{
		echo "login";
	} 



?>