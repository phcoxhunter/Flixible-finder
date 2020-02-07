<?php 
if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['ty'])) {
	$username = htmlspecialchars($_POST['username']);
	$type = htmlspecialchars($_POST['ty']);
	$password = sha1($_POST['password']);
	$filename = $username.".txt";
	$sub_type = fopen('type/'.$filename, 'w');
	fwrite($sub_type, $type);
	fclose($sub_type);
	$sub_pass = fopen('password/'.$filename, 'w');
	fwrite($sub_pass, $password);
	fclose($sub_pass);

}

 ?>