<?php 
include('database.php');
include('function.php');
$id_friend=$_POST['id'];
$id_user=$_COOKIE['user'];


add_to_friends($id_user,$id_friend);
function add_to_friends($id_user,$id_friend){
	global $link;
	$adress="";
	$categories = get_categories($link,"users");
	foreach ($categories as $user)
	 	if ($user['id']==$id_user)
	 		$adress=$user['adress'];
	
	$categories3 = get_categories($link,"users");
	foreach ($categories3 as $user){
		$count_p=0;
	 	$raiting=10;
	 	$categories2 = get_categories($link,"friends");
	 	foreach ($categories2 as $category2){
	 		if (($category2["id_friend"]==$id_friend && $category2["id_user"]==$id_user) || ($category2["id_user"]==$id_friend && $category2["id_friend"]==$id_user)){
				$count_p=1;
	 		}
	 	}
	 	
	 	
 		if ($count_p==0){		
 			if ($categories3[$id_friend-1]['adress']==$adress)		
	 			$raiting=$raiting+1;
 
 			mysqli_query($link,"INSERT INTO friends (id_user,id_friend, raiting)
 	        VALUES('$id_user','$id_friend','$raiting')");
 		}
	}
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>