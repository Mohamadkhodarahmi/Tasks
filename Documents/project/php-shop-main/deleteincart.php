<?php
include_once 'config.php';
if ($_GET['del_id']){
    $pro = "DELETE FROM   cart where {$_GET['del_id']} = productid and {$_SESSION['id']} = userid";
    $proResult = $connection->query($pro);
    setcookie('itemdelete','item deleted successfully',time() + 2);
    header('Location:./cartpage.php');

}
