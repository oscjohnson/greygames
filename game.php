<?php include('header.php') ?>


	<div class="image-slider">
			<section class="slider">
	        <div class="flexslider">
            <?php include('searchfield.php'); ?>
	          <ul class="slides">
	          		<?php 
	          			$ID = $_GET['ID'];
	          			$_SESSION['gameID'] = $ID;
	          			$query = mysql_query("SELECT Image.imageName FROM Image
												JOIN Game
												ON Game.ID = Image.game_ID
												WHERE game_ID = '$ID'
												AND Image.imageName LIKE '%banner%'");
	          			while($row = mysql_fetch_array($query)){

	          				echo "<li><img src='images/games/" . $row['imageName'] . "'/></li>";
	          			}

	          		?>
	     
	  	    	
	          </ul>
	        </div>
	</div>

		
	<div id="content">

		
        
		
			
				<?php  
				$platformString = "";
					if($ID = $_GET['ID'])
					{

						$dataQuery = mysql_query("SELECT Game.ID,Game.name ,Game.releaseDate ,Genre.genreName,
														 Publisher.publisherName, Developer.developerName, Esrb.ageRating

												  FROM Game
													  JOIN Genre
													  	ON Game.genreID = Genre.ID
													  JOIN Publisher
													 	ON Game.publisherID = Publisher.ID
													  JOIN Developer
													  	ON Game.DeveloperID = Developer.ID
													  JOIN Esrb
													  	ON Game.esrbID = Esrb.ID
												  WHERE Game.ID = $ID");

						$platformQuery = mysql_query("SELECT * 
													  FROM Platform
													  WHERE ID= ANY(SELECT platformID 																	  				 FROM Has 
													  				  				 WHERE gameID = '$ID')");

						
												  

						$dataRow = mysql_fetch_array($dataQuery);
						$count = 0;
						

 						while($row = mysql_fetch_array($platformQuery))
 						 {
 						 	$count++;	

 						 	if($count != mysql_num_rows($platformQuery))
 						 	{
 						 		$platformString = $platformString . $row['platformName'] . ", " ;
 						 	}

 						 	else $platformString = $platformString . $row['platformName'];
 						 } 

 						 $inPlaylist = 0;

 						 if(isset($_SESSION['username']))
 						 {
 						 	 $_SESSION['gameID'] = $dataRow['ID'];

 						 	 $gameID = $_SESSION['gameID'];
							 $userID = $_SESSION['ID'];


 						 	 $query = mysql_query("SELECT COUNT(*)
						 					  FROM Playlist
						 			 		  WHERE gameID = '$gameID'
						 			 		  AND userID = '$userID'");

							$inPlaylist = mysql_result($query,0);
 						 }


						
						print "<center id='container-name'><h2>" . $dataRow['name'] . "</h2></center>" . "<br>";
						print "<div id='container-left'><p>";
						print "<h3>" . "<span class='bold'>Genre: </span>" . $dataRow['genreName'] .  "</h3>";
						print "<h3>" . "<span class='bold'>Release Date: </span>"  . $dataRow['releaseDate'] .	  "</h3>";		
						print "<h3>" . "<span class='bold'>Publisher: </span>"  . $dataRow['publisherName'] .   "</h3>";	
						print "<h3>" . "<span class='bold'>Developer: </span>"  . $dataRow['developerName'] .  "</h3>";	
						print "<h3>" . "<span class='bold'>ESRB: </span>"  . $dataRow['ageRating'] .   "</h3>";	
						print "<h3>" . "<span class='bold'>Platform: </span>"  . $platformString .   "</h3>";
						
						
					}	

				?>

				
		
				
			</p>


			<!--
				<h2><span class='bold'>ASSASIN'S CREED III</span> (2012)<br/></h2>
				<span class="bold">GENRE: </span>ADVENTURE, ACTION <br/>
				<span class="bold">RELEASE DATE:</span> 2012-10-30 <br/>
				<span class="bold">PUBLISHER:</span> UBISOFT	<br/>
				<span class="bold">DEVELOPER: UBISOFT</span> <br/>
				<span class="bold">ESRB:</span> M <br/>
				<span class="bold">PLATFORM:</span> PS3, XBOX360, PC, Wii U <br/>
				<br/>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			-->
		</div>
		<div id="container-right">
		<?php
			$query = mysql_query("SELECT AVG( userRating ) AS average FROM Rating WHERE gameID =  '$ID'");
			$row = mysql_fetch_array($query);
			print "<div id='average-rating'>" . sprintf("%01.1f", $row['average']). "</div>";
		?>	
<!--             <div class="rating-list">
            <a href="" class='star-1'><span>1</span></a>
            <a href="" class='star-2'><span>2</span></a>
            <a href="" class='star-3'><span>3</span></a>
            <a href="" class='star-4'><span>4</span></a>
            <a href="" class='star-5'><span>5</span></a>
            <a href="" class='star-6'><span>6</span></a>
            <a href="" class='star-7'><span>7</span></a>
            <a href="" class='star-8'><span>8</span></a>
            <a href="" class='star-9'><span>9</span></a>
            <a href="" class='star-10'><span>10</span></a>
            </div> -->
            <?php
            if(isset($_SESSION['username']))
			{

				print"      <div class='rating-list'>
				            <a href='' class='star-1'><span>1</span></a>
				            <a href='' class='star-2'><span>2</span></a>
				            <a href='' class='star-3'><span>3</span></a>
				            <a href='' class='star-4'><span>4</span></a>
				            <a href='' class='star-5'><span>5</span></a>
				            <a href='' class='star-6'><span>6</span></a>
				            <a href='' class='star-7'><span>7</span></a>
				            <a href='' class='star-8'><span>8</span></a>
				            <a href='' class='star-9'><span>9</span></a>
				            <a href='' class='star-10'><span>10</span></a>
				            </div>";

				            
				$userID = $_SESSION['ID'];


				if($inPlaylist == 0)
				{
					print "<button id ='playlist-button' class='notInPlaylist'>PLAYLIST</button>";
				}

				if($inPlaylist == 1)
				{
					print "<button id ='playlist-button' class='inPlaylist'>PLAYLIST</button>";
				}

				$ratingQuery = mysql_query("SELECT userRating FROM Rating WHERE userID = '$userID' AND
				gameID = $ID");

				$number = mysql_fetch_array($ratingQuery);

				print"<script>printStars(". $number['userRating']. ")</script>";

			}


			?>
        </div>
		<div id="container-right-right">
        </div>
		
        <div id="container-bottom">
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mi leo, vulputate et accumsan eu, cursus blandit neque. Praesent sit amet odio vel mauris lacinia semper ut sit amet purus. Praesent cursus auctor est et cursus. Suspendisse tincidunt facilisis lorem, quis volutpat urna posuere vel. Vivamus elementum molestie elit a consectetur. Donec sagittis metus sit amet eros bibendum cursus pharetra est faucibus. Morbi eget nulla orci, et consectetur tortor. Phasellus bibendum fau.
            </p>  
        </div>
        <div id="container-image">
        	<p><?php print $dataRow['name'] . ","; ?></p> <h4>IMAGES:</h4><br/><br/>
        	<ul>
	        	<?php
					$query = mysql_query("SELECT Image.imageName FROM Image
													JOIN Game
													ON Game.ID = Image.game_ID
													WHERE game_ID = '$ID'
													AND Image.imageName LIKE '%gameplay%'");
		          			while($row = mysql_fetch_array($query)){

		          				echo "<li><a class='fancyImg' href='images/games/". $row['imageName']  . "'> <img src='images/games/" . $row['imageName'] . "'/></a></li>";
		          			}

	        	?>
        	</ul>
        </div>
        <div id="container-trailer">
        	<p><?php print $dataRow['name'] . ","; ?></p> <h4>TRAILER:</h4><br/><br/>	
        	<ul>
        		<?php
					$query = mysql_query("SELECT * FROM Trailer
											JOIN Game
											ON Game.ID = Trailer.game_ID
											WHERE game_ID = '$ID'");
          			while($row = mysql_fetch_array($query)){

          				echo "<li><a class='fancyYoutube' href='http://www.youtube.com/watch?v=". $row['link']  . "'> <img src='http://i3.ytimg.com/vi/" . $row['link'] . "/default.jpg'/></a></li>";
          			}


        		?>	
        	</ul>
        </div>
        
        
	</div>


  

</body>
</html>
