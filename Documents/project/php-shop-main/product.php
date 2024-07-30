<?php
include_once "config.php";

    foreach ($result->fetch_all(1) as $row):

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/output.css">
    <title>Document</title>
</head>
<body>

<div class="bg-white rounded-lg shadow-lg p-8">
    <div class="relative overflow-hidden">
        <img class="object-cover w-full h-full" src="./public/img/<?= $row["image"] ?>" alt="Product">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <a type="submit" class="bg-white text-gray-900 py-2 px-6 rounded-full font-bold hover:bg-gray-300 " id="viewProduct" href="productview.php?pro_id=<?=$row['id']?>">View Product</a>
        </div>
    </div>
    <h3 class="text-xl font-bold text-gray-900 mt-4"><?=$row["productname"]?></h3>
    <p class="text-gray-500 text-sm mt-2"><?=$row["descpription"]?></p>
    <div class="flex items-center justify-between mt-4">
        <span class="text-gray-900 font-bold text-lg">$<?=$row["price"]?> USD</span>
        <form method="post" action="./cart.php">
            <a type="submit" class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800" href="cart.php?pro_id=<?=$row['id']?>" >Add to Cart</a>
        </form>
    </div>
</div>

</body>
</html>
<?php



endforeach;
    ?>

