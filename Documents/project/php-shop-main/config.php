<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();

$db_host = "localhost";
$db_username = "mamad";
$db_password = "138055@mM";
$db_name = "shop";

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if ($connection->connect_error) {
    die("connection failed" . $connection->connect_error);
}

$sql = "SELECT * FROM products LEFT JOIN XX_SAMPLE ON products.productname = XX_SAMPLE.name";
$result = $connection->query($sql);

$users = "SELECT * FROM users  ";
$userResult =$connection->query($users);

if (isset($_SESSION['id'])){
    $image = "SELECT * FROM users WHERE id ={$_SESSION['id']}";
    $imageres = $connection->query($image);
    $last = $imageres->fetch_row();
    $_SESSION['prof'] =$last[5];

    $pro = "SELECT * FROM cart,products WHERE products.id = cart.productid and cart.userid = {$_SESSION['id']}";
    $proResult = $connection->query($pro);

    $sumprice ="SELECT SUM(price) as sum FROM cart WHERE cart.userid = {$_SESSION['id']}";
    $sumresult = $connection->query($sumprice);
    $a = $sumresult->fetch_all(1);

}
//print_r($_SESSION);










