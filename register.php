<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-family: verdana;
			background:white;
			width: 360px;
			height: 360px;
			overflow: hidden;
			margin: 0px;
		}
		button{
			padding: 8px;
		}
		#register-screen input{
			padding: 7px;
		}
		table{
			text-align: center;
			padding: 8px;
			/*background: #89b416;*/
			margin: 0px auto;
			border-top-right-radius: 4px;
			border-top-left-radius: 4px;

		}
		table td:nth-child(1){
			text-align: right;	
			width: 140px;		
		}
		table td:nth-child(2){
			text-align: left;			
		}
		textarea{
			width: 168px;
			height: 131px;
			resize: none;
		}
	</style>
</head>
<body>

	<form method='POST' action='registerHandler.php'>

		<table id="register-screen">
			<tr>
				<td>E-mail</td><td><input name='username'></td>
			</tr>
			<tr>
				<td>Password</td><td><input name='password1' type='password'></td>
			</tr>
			<tr>
				<td>Confirm password</td><td><input name='password2' type='password'></td>
			</tr>
			<tr>
				<td>Write something about yourself</td><td><textarea name='personal-info'></textarea></td>
			</tr>
			 

		</table>
			
			<center><button type='submit' name='submit'>Register</button></center>


	</form>	


</body>
</html>