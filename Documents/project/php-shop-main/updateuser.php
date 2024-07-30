<?php
include_once 'config.php';
if (isset($_POST['name'])&&isset($_POST['username']) && isset($_POST['email'])){
//    echo $_SESSION['id'];
//    echo $_POST['name'];
    $update = "UPDATE users set name='{$_POST['name']}',username ='{$_POST['username']}',email='{$_POST['email']}' WHERE id={$_SESSION["id"]}";
    $_SESSION['user']=[
        $_POST['name'],
        $_POST['username'],
        $_POST['email']
    ];
    $updateresult = $connection->query($update);
    setcookie('updateprof','your profile updated successfully',time() + 2);
    header('Location:./profile.php');
}