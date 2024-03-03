<?php
include("database.php");
include('function.php');

$name=$_POST['name'];
$con=$_POST['con'];


$categories1 = get_categories($link,"users");
foreach ($categories1 as $users)
    if ($users['id']==$con){
        echo "<div class='d-flex col-12'>";
        echo "<img ".$users["fotourl"]." alt=\"profile\" class=\"img-fluid\">";
        echo "<div class='mx-3'>";
        echo "<h4 class='m-0'> ". $users["sername"]."</h4>";
        echo "<h4 class='m-0'> ". $users["name"]."</h4>";
        echo "</div>";
        echo "</div>";
        echo "<div class='col-12 d-flex flex-column mt-2'>";
        echo "<hr>";
    }


$categories = get_categories($link,"message");

foreach ($categories as $message){
 	$id=$message["id"];
 	$msg=$message["message"];
    $tosend=$message["tosend"];
    $t=$message["d"];
    if (($name==$id && $con==$tosend)||($con==$id && $name==$tosend)){
    echo "
 	  <div id='message'>
 	  <b>";
    $categories1 = get_categories($link,"users");
    foreach ($categories1 as $users)
        if ($users['id']==$id)
            echo $users["sername"]." ".$users["name"];

    echo " в $t:</b>
 	  <br>
 	  $msg
 	  </div>
 	";
    }
}

$categories = get_categories($link,"users");
foreach ($categories as $users)
    if ($users['id']==$con){
        echo "</div>";
        
    }

?>