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
	  	    	    <img src="images/games/sims-banner-3.jpeg" />
	  	    		</li>
	  	    		<li>
	  	    	    <img src="images/games/battlefield-banner-1.jpeg" />
	  	    		</li>
	  	    	
	          </ul>
	        </div>
	</div>

		
	<div id="content">
		<div id="container">
			<script type="text/javascript">
				$(document).ready(function(){ 
						$('#container').load('load.php');

				});
			</script>
		</div>
		


	</div>

</body>
</html>
