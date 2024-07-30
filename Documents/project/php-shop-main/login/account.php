<?php
include_once '../config.php';


while ($user = $userResult->fetch_assoc()) {
    if($_POST['email'] == $user['email']) {
        if ($_POST['password'] == $user['password']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['user']=[
                $user['name'],
                $user['username'],
                $user['email']
            ];
            $_SESSION['login']=1;

            header("Location:../index.php");
            die;
        } else {
            setcookie('wrong', 'wrong pass',time() + 3,'/');
            header("Location:./");
            die;
        }
    }
    else{
        setcookie('wrongemail', 'wrong pass or email',time() + 3,'/');
        header("Location:./");

        
    }
}