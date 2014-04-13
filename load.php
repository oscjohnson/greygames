<?php

include('db.inc.php'); 
db_connect();

		$query = mysql_query("SELECT Game.name,  Game.ID, Image.imageName, Developer.developerName, SUBSTR(releaseDate,1,4) AS year
							 , AVG( userRating )  AS average 

						  	FROM Game

							JOIN Image
							ON Game.ID = Image.game_ID

							JOIN Developer
							ON Game.developerID = Developer.ID

							JOIN Rating
							ON Game.ID = Rating.gameID
                      
							AND Image.imageName LIKE '%thumbnail%'
							GROUP BY Game.ID
							ORDER BY average desc
					");



Print "<ul id='top10'>"; 

while($row = mysql_fetch_array($query)){
		print " <li><a href='game.php?ID= " . $row['ID'] ." '> "."<img src='images/games/" . $row['imageName'] . "'/>" .
		"<span id = 'game-name'>" .$row['name'] . "</span> "."<span id = 'game-rating'> RATING:  <img id='star' src='images/starBig2.png' />" .
		  sprintf("%01.1f", $row['average']). "</span>"  . "</a></li>"; 
	}

Print "</ul>"; 



?>
