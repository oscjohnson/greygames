<?php  include('header.php');	?>


	<div class="image-slider">
			<section class="slider">
	        <div class="flexslider">
	          <ul class="slides">
	            <li>
	  	    	    <img src="images/games/assassins-banner-2.jpeg" />
	  	    		</li>
	  	    		<li>
	  	    	    <img src="images/games/assassins-banner-3.jpeg" />
	  	    		</li>
	  	    		<li>
	  	    	    <img src="images/games/assassins-banner-1.jpeg" />
	  	    		</li>
	  	    	
	          </ul>
	        </div>
	      </section>
	</div>

		
	<div id="content">
		<div id="container-left">

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
  <script defer src="js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: 'true',
        slideshowSpeed: 5000, 
        directionNav: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<script type="text/javascript">
	 $('.image-slider').css({
	  		width: window.innerWidth,
	  	});

</script>


</body>
</html>
