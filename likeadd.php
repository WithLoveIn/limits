<?php
require_once 'database.php';
require_once 'function.php';
date_default_timezone_set('UTC');
include('database.php');
global $link;

$sql = "SELECT * FROM news";

$categories = get_categories($link,"news");

$id = $_POST['newsid'];

$likes_count=$categories[$id-1]['likes_count']+1;

mysqli_query($link,"UPDATE `news` SET `likes_count` = $likes_count WHERE `news`.`id` = $id ");	
	
echo $id;
?>