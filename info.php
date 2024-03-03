<?php 
	$community_id = $_POST['community_id'];
	echo $community_id;
	setcookie('community_id', $community_id);
	
	header('Location: infopage.php');

 ?>