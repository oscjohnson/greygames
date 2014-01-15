<?php

include('db.inc.php'); 
db_connect();

$query = mysql_query("SELECT * FROM Game ORDER BY name");

Print "<ul>"; 

while($info = mysql_fetch_array( $query )) 
 { 
 	Print "<li><a href='game.php?ID=" . $info['ID'] ." '> ". $info['name'] . "</a></li> "; 
 } 

Print "</ul>"; 

?>