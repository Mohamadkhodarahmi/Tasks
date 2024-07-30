<?php
include_once 'config.php';

if (isset($_SESSION['login'])==1) {
    if ($_GET['pro_id']) {

        $pro = "SELECT * FROM   cart where {$_GET['pro_id']} = productid and {$_SESSION['id']} = userid";
        $proResult = $connection->query($pro);

        if (mysqli_num_rows($proResult) > 0) {

            setcookie('existpro', 'product already exists', time() + 3, '/');
            header("Location:./");
            die;
        } else {

            $ssql = "INSERT INTO cart (productid,userid,price) select products.id,users.id,products.price FROM products,users WHERE {$_GET['pro_id']} = products.id and {$_SESSION['id']} = users.id";
            if (mysqli_query($connection, $ssql)) {
                setcookie('added', 'product added successfully', time() + 3, '/');
                header("Location:./");


            } else {
                echo "Error: " . $ssql . "<br>" . mysqli_error($connection);
            }
            header('Location:./');
            die;
        }
    } else{
        echo "sdfs";
    }

}
else {
    setcookie('gologin', 'please login ', time() + 3);
    header('Location:./');
}
