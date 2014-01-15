<?php

include('db.inc.php');
db_connect();


$rec = $_REQUEST['val'];
//echo $rec; 

//get table contents
if($_REQUEST['val'])
{
  $query = mysql_query("SELECT Game.name, Game.ID, Image.imageName, SUBSTR(releaseDate,1,4) AS year,
  					 AVG( userRating ) AS average
							FROM Game

								JOIN Rating ON Game.ID = Rating.gameID
								JOIN Image ON Game.ID = Image.game_ID

								WHERE Image.imageName LIKE  '%thumbnail%'
								AND Game.name LIKE  '%$rec%'
								GROUP BY Game.name
								LIMIT 5");


  $total =  mysql_num_rows($query);
  print "<ul>";
  while($row = mysql_fetch_array($query)){
    echo " <li> "."<a href='game.php?ID= " . $row['ID'] ." '> "."<img id='thumb' src='images/games/" . $row['imageName'] . "'/>" .
		 "<p id = 'game-name'>" .
		 $row['name'] ."(".$row['year'].")"."</p> " ."<img id='star' src='images/starBig2.png' /><p id = 'game-rating'>" .
		  sprintf("%01.1f", $row['average']) . "</p>" . "</a>" ."</li>";
  }
  print "</ul>";

}
?>