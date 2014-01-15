<?php include('header.php') ?>

	<div class="image-slider">
    		<section class="slider">
	        <div class="flexslider">
             <?php include('searchfield.php'); ?>
	          <ul class="slides">
	            <li>
	  	    	    <img src="images/games/assassins-banner-3.jpeg" />
	  	    		</li>
	  	    		<li>
	  	    	    <img src="images/games/wow-banner-3.jpg" />
	  	    		</li>
	  	    		<li>
	  	    	    <img src="images/games/blackops-banner-1.jpg" />
	  	    		</li>
	  	    	
	          </ul>
	        </div>
	      </section>	</div>

		
	<div id="content">
		<div id="container">

				<?php

					$query = mysql_query("SELECT Review.reviewText, Review.date, User.mail, Game.name FROM Review
												
											JOIN User 
											ON Review.userID = User.ID

											JOIN Game
											ON Game.ID = Review.gameID
											ORDER BY Review.date desc");
					print "<ul id='review'>";
					while($row = mysql_fetch_array($query)){
						print "<li><span id='review-game-name'>". $row['name']. "</span><div id='review-text'>" .$row['reviewText']. "</div><span id='review-date'>".$row['date']. "</span>";
						print "<span id='review-by'>" . $row['mail']."</span></li>";
					}
					print "</ul>";

				?>

		</div>
		


	</div>

</body>
</html>

