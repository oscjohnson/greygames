<?php
	session_start();
	include('db.inc.php'); 
	db_connect();

?>

<html>
<head>
	<title>Grey Games</title>
	<!--Favicon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:80' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 

	<!-- Fancybox -->
		<script type="text/javascript" src="lib/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.3"></script>
		<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.2" media="screen" />
	<!-- Fancybox -->

	<!-- FLEXSLIDER-->
    	 <script defer src="js/jquery.flexslider.js"></script>
		<link href="css/shCore.css" rel="stylesheet" type="text/css" />
  		<link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<!-- Modernizr -->
  		<script src="js/modernizr.js"></script>
	<!-- FLEXSLIDER-->

	<link rel="stylesheet" type="text/css" href="style-reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javascript.js"></script>

</head>
<body>


	<div id="banner">
		<div id="bannerbanner">
			<center><a href="index.php"><img src="images/GreyGames.png" ></a></center>
		</div>


		<div id="menu-container">
			<ul>
				<li><a href="games.php">TOP10</a></li>
				
				<li><a href="review.php">REVIEWS</a></li>
				<li><a href="news.php">NEWS</a></li>
				<?php
					if(isset($_SESSION['username'])){
						print "<li><a href='profile.php'>PROFILE</a></li>";
						print "<li><a href='logoutHandler.php'>LOGOUT</a></li>";
					}
					else{
						print "<li><a id='fancybox-manual-b' class='fancybox fancybox.iframe login' href='register.php'>REGISTER</a></li>";
						print "<li><a id='fancybox-manual-b' class='fancybox fancybox.iframe login' href='login.php'>LOGIN</a></li>";
						
					}	
				?>
		  </ul>
				
				
		</div>

	</div>



