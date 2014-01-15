<?php
	include('db.inc.php');
	db_connect();

	$username = $_POST['username'];
	
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	$info = $_POST['personal-info'];

	//echo $username . "   " . $password1 . "    " . $password2 . "   " . $info;

	$query = mysql_query("SELECT COUNT(*) FROM User WHERE mail='$username'");
	
	//echo "Hej: " . (int)mysql_result($query,0);
	print "<div id='register'>";
	if($password1 =="" && $password1 =="" ){
		echo "Please enter a password!";
		echo "Please <a href='register.php'>retry</a>. ";
	}
	else if($username ==""){
		echo "Please enter a email!";
		echo "Please <a href='register.php'>retry</a>. ";
	}
	else{
		if($password1 != $password2){
			echo "Please enter same passwords!";
			echo "Please <a href='register.php'>retry</a>. ";
		}
		else{
			if(mysql_result($query,0) == 0){
				mysql_query("INSERT INTO User(mail, password, facebook, info, background) VALUES('$username', '$password1', '0', '$info', 'black')");
				echo "You are now a member of this site!<br/>";
		

			}
			else{
				echo "Email is already registered.";
				echo "Please <a href='register.php'>retry</a> with a new e-mail. ";
			}
		}
	}
	print "</div>";
	print"
			<style>
				#register{
							font-family:verdana;
							font-size: 20px;
							width: 200px;
							padding: 10px;
							text-align: center; 	
				}
			</style>




	";
?>