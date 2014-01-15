<?php include('header.php') ?>

	<div class="image-slider">
   		<section class="slider">
	        <div class="flexslider">
             <?php include('searchfield.php'); ?>
	          <ul class="slides">
	            <li>
	  	    	    <img src="images/games/heavyrain-banner-1.jpeg" />
	  	    		</li>
	  	    		<li>
	  	    	    <img src="images/games/diablo-banner-3.jpeg" />
	  	    		</li>
	  	    		<li>
	  	    	    <img src="images/games/gta-banner-1.jpg" />
	  	    		</li>
	  	    	
	          </ul>
	        </div>
	      </section>
	</div>

		
	<div id="content">
		<div id="container">

				<?php

					$query = mysql_query("SELECT * FROM News
											ORDER BY date desc	
											");
					print "<ul id='news'>";
					while($row = mysql_fetch_array($query)){
						print "<li><div id='review-text'>" .$row['news']. "</div><span id='news-date'>".$row['date']. "</span>";

					}
					print "</ul>";

				?>

		</div>
		


	</div>

</body>
</html>

