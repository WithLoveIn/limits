<?php

date_default_timezone_set('UTC');
include('database.php');
global $link;

$sql = "SELECT * FROM message";

$id = $_POST['name'];
$message = $_POST['msg'];
$tosend = $_POST['con'];

$d = date('Y-m-d H:i:s');

mysqli_query($link,"INSERT INTO message (id, message, d, tosend)  
VALUES ('$id','$message','$d', '$tosend')");	
	
echo 1;
?>