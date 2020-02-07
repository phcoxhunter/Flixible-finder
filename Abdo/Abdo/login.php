<!DOCTYPE html>
<html>
<head>
	<title>The Website</title>
</head>
<body>
<div>
	Login<br><br>
	<form action="login.php" method="post">
		Username: <input type="text" name="Username" placeholder="Write the Username here">
		<br><br>
		Password: <input type="Password" name="Password" placeholder="Write your Password here">
		<br><br>
		<input type="submit" name="submit">
	</form>
</div>
<br><br>
Don't have an Account Please sign up <a href="/Abdo/signup.php">here</a>
<?php
if (isset($_POST['submit']) && isset($_POST['Username']) && isset($_POST['Password'])) {
	$username = htmlspecialchars($_POST['Username']);
	$password = sha1($_POST['Password']);
	$filename = $username.'.txt';
	$chk_pass = fopen('password/'.$filename, "r") or die("unable to read");
	
	if (fread($chk_pass, filesize('password/'.$filename)) == $password) {
		echo "right password";
	}
	else {
		echo "wrong password";
		echo $chk_pass;
	}

}

 ?>
</body>
</html>