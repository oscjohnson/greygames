<?php
	session_start();
	include('db.inc.php');
	db_connect();

	$userID = $_SESSION['ID'];

	$query = mysql_query("SELECT Game.name, Game.ID, Rating.userRating, Image.imageName
						  	FROM Game

						  	JOIN Rating
						  	ON Game.ID = Rating.gameID

							JOIN Image
							ON Game.ID = Image.game_ID

                            WHERE userID = '$userID'                          
							AND Image.imageName LIKE '%thumbnail%'");

	print "<ul>";
	while($row = mysql_fetch_array($query)){
		print " <li> <a href='game.php?ID= " . $row['ID'] ." '> "."<img src='images/games/" . $row['imageName'] . "'/>" .
		"<span id = 'game-name'>" .$row['name'] . "</span> " ."<span id = 'game-rating'> YOUR RATING:  <img id='star' src='images/starBig2.png' />" .
		  $row['userRating'] . ".0</span>" . "</a></li>"; 
	}
	print "<ul>";



?>