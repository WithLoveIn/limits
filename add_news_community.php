<?php 
include('database.php');
global $link;
$sql = "SELECT * FROM news";

$id = mysqli_num_rows(mysqli_query($link,$sql)) + 1;

$textnews = $_POST['textnews'];
$id_user = $_COOKIE['user'];
$photourl = "src=\"img/".$_POST['photourl']."\"";
$date_time=date('Y-m-d H:i:s');
$likes_count=0;
$community_id=$_COOKIE['community_id'];

mysqli_query($link,"INSERT INTO news (id, id_user,date_time,textnews,photourl,likes_id_user,community_id)  
VALUES ('$id','$id_user','$date_time','$textnews','$photourl','$likes_count','$community_id')");

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>