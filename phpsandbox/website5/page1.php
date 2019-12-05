<?php 
	if(isset($_POST['submit'])){
		//echo '123';
		session_start(); // start the session
		$username = htmlentities($_POST['username']);
		setcookie('username', $username, time()+3600); // set for an hour

		header('Location: page2.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">		
		<input type="text" name="username"  placeholder="Enter User Name">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>