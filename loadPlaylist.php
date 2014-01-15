<?php
	session_start();
	include('db.inc.php');
	db_connect();

	$userID = $_SESSION['ID'];


	$query = mysql_query("SELECT Game.name, Game.ID, Image.imageName,Rating.userRating, AVG(Rating.userRating) as average
						  	FROM Game

						  	JOIN Playlist
						  	ON Game.ID = Playlist.gameID
					  		
					  		JOIN Rating
						  	ON Game.ID = Rating.gameID
							
							JOIN Image
							ON Game.ID = Image.game_ID

                                                    
							WHERE Image.imageName LIKE '%thumbnail%'
							AND Playlist.userID LIKE '$userID'
							GROUP BY Game.ID
							");





	print "<ul>";
	while($row = mysql_fetch_array($query)){
		print " <li><a href='game.php?ID= " . $row['ID'] ." '> "."<img src='images/games/" . $row['imageName'] . "'/>" .
		"<span id = 'game-name'>" .$row['name'] . "</span> "."<span id = 'game-rating'> RATING:  <img id='star' src='images/starBig2.png' />" .
		  sprintf("%01.1f", $row['average']) . "</span>"  . "</a></li>"; 
	}
	print "<ul>";


?>