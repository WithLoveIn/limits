<?php 
	$email = filter_var(trim($_POST['authorization_email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['authorization_pass']),FILTER_SANITIZE_STRING);

	$pass = md5($pass."ktif4382");

	$mysql = new mysqli('localhost','root','root','limits');
	
	$result = $mysql->query("SELECT * FROM users WHERE login='$email' AND password='$pass'");
	
	$user_data = $result->fetch_assoc();
	if (gettype($user_data)=="NULL"){
		setcookie('user', "error");
	 	$mysql->close();
	 	header('Location: index.php');
	}
	setcookie('user', $user_data['id']);
	$mysql->close();
	header('Location: profile.php');

 ?>