<?php 
	
function get_categories($link,$cat){
	$sql = "SELECT * FROM $cat";
	$result = mysqli_query($link, $sql);
	$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $categories;
}

 ?>