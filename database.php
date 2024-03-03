<?php

$link = mysqli_connect('localhost','root','root','limits');
if (mysqli_connect_errno())
{
	echo 'Ошибка ('.mysqli_connect_errno().'): '.mysqli_connect_error();
	exit();
}

?>