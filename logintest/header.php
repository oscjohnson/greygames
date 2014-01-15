<?php
session_start();
include('db.inc.php'); 
db_connect();

if(isset($_SESSION['username']))
	{
		//echo "hejhejhejhej";
	}

?>

<html>
<head>
	<title></title>
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
		<link href="css/shCore.css" rel="stylesheet" type="text/css" />
  		<link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<!-- Modernizr -->
  		<script src="js/modernizr.js"></script>
	<!-- FLEXSLIDER-->


	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javascript.js"></script>

</head>
<body>


	
	<div id="banner">
		<div id="bannerbanner">

		<p><a href="index.php">GREY<span style="font-family:PT Sans;color:#b4d163;">GAMES</span></a></p>
				
				<div id="search-bar">
							<input placeholder='Search'><button><img src="images/search.png"></button>
				</div>


		</div>


		<div id="menu-container">
			<ul>
				<li><a href="games.php">GAMES</a></li>
				<li><a href="game.php">GAME</a></li>
				<li><a href="">REVIEWS</a></li>
				<li><a href="">NEWS</a></li>
				<?php
				if(isset($_SESSION['username']))
				{
					print '<li><a href="logoutHandler.php">LOGOUT</a></li>';
				}
				else
				{
					print '<li><a id="fancybox-manual-b" class="fancybox fancybox.iframe login" href="login.php">LOGIN</a></li>	';
				}
				?>
			</ul>
				
				
		</div>

	</div>



