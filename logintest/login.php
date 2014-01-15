<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			width: 360px;
			height: 200px;
			overflow: hidden;
			margin: 0px;
		}
		#login-screen button{
			padding: 8px;
		}
		#login-screen input{
			padding: 7px;
		}
		#login-screen{
			text-align: center;
			padding: 8px;
			background: #89b416;
			margin: 0px auto;
			border-top-right-radius: 4px;
			border-top-left-radius: 4px;

		}

		#facebook-button{
			text-align: center;
			font-family: arial;
			width: 200px;
			border-radius: 3px;
			background: #3b5999;
			padding: 5px;
			margin: 17px auto;
			color: white;

		}

	</style>
</head>
<body>

	<form method='GET' action='loginHandler.php'>

		<div id="login-screen">
			<input placeholder='E-mail' name='username'><br/>
			<input placeholder='Password' name='password' type='password'><br/>
			<button type='submit' name='submit'>Login</button>

		</div>

	</form>	

	<div id="facebook-button">
		 Login with Facebook
	</div>



</body>
</html>