<?php
include "config.php";

$filename = uniqid();

move_uploaded_file($_FILES["file"]["tmp_name"],"./public/img/user/$filename");


$insert = "UPDATE users set profile = ('$filename') WHERE id = {$_SESSION["id"]}";

$res = $connection->query($insert);
header('Location:./profile.php');



//print_r($last);

//print_r($_SESSION['id']);
//echo $last['profile'];




