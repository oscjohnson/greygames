<?php include('header.php') ?>


	<div class="image-slider">
			<img class="image-slider-img1" src="images/assassins-creed--brotherhood-19.jpg"> 
	</div>

		
	<div id="content">


		<div id="container-left">
			<p>
				<?php  
					
					$ID = $_GET['ID'];
					if($ID)
					{
						//echo $ID;
						$gameQuery = mysql_query("SELECT * FROM Game WHERE ID = $ID");
						
						$gameRow = mysql_fetch_array($gameQuery);

						$genre = $gameRow['genreID'];
						$developer = $gameRow['developerID'];

						$dataQuery = mysql_query("SELECT name , genreName
												  FROM Developer, Genre 
												  WHERE Developer.ID = $developer
												  AND Genre.ID = $genre");				

						$dataRow = mysql_fetch_array($dataQuery);

						
						print "<h2>" . $gameRow['name'] . "</h2>" . "<br>";
						print "<h3>". "<i>" . "Genre: " ."</i>" . $dataRow['genreName'] .  "</h3>";
						print "<h3>". "<i>" . "Release Date: " ."</i>" . /*$dataRow['name'] .*/	  "</h3>";		
						print "<h3>". "<i>" . "Publisher: " ."</i>" . /*$dataRow['name'] .*/   "</h3>";	
						print "<h3>". "<i>" . "Developer: " ."</i>" . $dataRow['name'] .  "</h3>";	
						print "<h3>". "<i>" . "ESRB: " ."</i>" . /*$dataRow['name'] .*/   "</h3>";	
						print "<h3>". "<i>" . "Platform: " ."</i>" . /*$dataRow['name'] .*/   "</h3>";	
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
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>


	</div>

</body>
</html>
