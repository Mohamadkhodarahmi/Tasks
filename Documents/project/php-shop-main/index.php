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
<?php
if (isset($_COOKIE['added'])):
?>
<div class="rounded-md bg-[#C4F9E2] p-4">
    <p class="flex items-center text-sm font-medium text-[#004434]">
      <span class="pr-3">
         <svg
                 width="20"
                 height="20"
                 viewBox="0 0 20 20"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
         >
            <circle cx="10" cy="10" r="10" fill="#00B078" />
            <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M14.1203 6.78954C14.3865 7.05581 14.3865 7.48751 14.1203 7.75378L9.12026 12.7538C8.85399 13.02 8.42229 13.02 8.15602 12.7538L5.88329 10.4811C5.61703 10.2148 5.61703 9.78308 5.88329 9.51682C6.14956 9.25055 6.58126 9.25055 6.84753 9.51682L8.63814 11.3074L13.156 6.78954C13.4223 6.52328 13.854 6.52328 14.1203 6.78954Z"
                    fill="white"
            />
         </svg>
      </span>
        Your item has been added successfully
    </p>
</div>
<?php
endif;
?>
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


