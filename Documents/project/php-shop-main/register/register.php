<?php

include '../config.php';

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $usersr = "SELECT * FROM users where username='$username'";
    $userrResult = $connection->query($usersr);

    if (mysqli_num_rows($userrResult) > 0) {
        setcookie('exist', 'username already exists', time() + 3, '/');
        header("Location:./");
        die;
    }
    else {
        $ssql = "INSERT INTO users (name,username,email,password) VALUES ('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[password]')";
        if (mysqli_query($connection, $ssql)) {
            setcookie('register','registered successfully');

        } else {
            echo "Error: " . $ssql . "<br>" . mysqli_error($connection);
        }
        header('Location:../login');
        die;


    }
}
