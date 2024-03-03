<?php 
	include('database.php');
	global $link;
	$sql = "SELECT * FROM users";
	$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;
	$email = filter_var(trim($_POST['reg_email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['reg_pass']),FILTER_SANITIZE_STRING);
	$sername = filter_var(trim($_POST['reg_sername']),FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['reg_name']),FILTER_SANITIZE_STRING);
	$patron = filter_var(trim($_POST['reg_patron']),FILTER_SANITIZE_STRING);
	

	$adress = filter_var(trim($_POST['reg_adress']),FILTER_SANITIZE_STRING);
	$phone = filter_var(trim($_POST['reg_phone']),FILTER_SANITIZE_STRING);
	$birthday = filter_var(trim($_POST['reg_birthday']),FILTER_SANITIZE_STRING);
	$photo = "src=\"img/".filter_var(trim($_POST['reg_photo']),FILTER_SANITIZE_STRING)."\"";
	
	// Проверка на ввод
	if (mb_strlen($email)<5||mb_strlen($email)>90){
		echo "Недопустимый email";
		exit();
	} else if (mb_strlen($pass)<4||mb_strlen($pass)>20){
		echo "Недопустимый пароль";
		exit();
	}

	$pass = md5($pass."ktif4382");

	mysqli_query($link,"INSERT INTO users (id, login, password, sername, name, patron, adress, phone, birthday , fotourl) VALUES ('$id','$email','$pass','$sername','$name','$patron','$adress', '$phone','$birthday','$photo')");
	
	header('Location: index.php');
 ?>