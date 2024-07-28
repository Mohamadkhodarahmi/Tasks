<?php

include_once 'master/header.php'
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
<div class="bg-gray-900 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-white mb-8">shop Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php

                include_once "product.php";
            ?>



</div>
    </div>
</div>

</body>
</html>


