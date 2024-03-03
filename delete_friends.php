<?php 
include('database.php');
global $link;
$id_friend = $_POST['id'];
$id_user=$_COOKIE['user'];
echo $id_friend;
echo $id_user;
mysqli_query($link,"DELETE FROM `friends` WHERE `friends`.`id_user` = $id_friend AND `friends`.`id_friend` = $id_user");
mysqli_query($link,"DELETE FROM `friends` WHERE `friends`.`id_user` = $id_user AND `friends`.`id_friend` = $id_friend");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>