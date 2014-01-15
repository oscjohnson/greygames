<?php
session_start();
include('db.inc.php');
db_connect();

$gameID = $_SESSION['gameID'];
$userID = $_SESSION['ID'];

$query = mysql_query("DELETE FROM Playlist WHERE gameID=$gameID AND userID=$userID");

echo mysql_result($query,0);

if(mysql_result($query,0) == 0){
	

}	


?>