<?php
include_once 'config.php';

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

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">


        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">shop</span>

        <button  data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 " aria-controls="navbar-default" aria-expanded="false">


        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <?php
                if (isset($_SESSION['login'])==0):
                    ?>
                    <li>
                        <a href="../login" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">login</a>
                    </li>
                <?php

                endif;
                ?>


                <li>
                    <a href="../cartpage.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">cart</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">contact</a>
                </li>

                <?php
                if(isset($_SESSION['login'])==1):
                    ?>

                    <li>
                        <a href="../profile.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">your account</a>
                    </li>
                    <li>
                        <a href="../logout" class="block py-2 px-3 text-white bg-red-700 rounded md:bg-transparent md:text-red-700 md:p-0 dark:text-white md:dark:text-red-900" aria-current="page">Logout</a>
                    </li>
                    <li>
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="<?= $_SESSION['prof'] ? "../public/img/user/{$_SESSION['prof']}" : "../public/img/prof.png" ?>" alt="">
                                </button>
                            </div>
                    </li>
                <?php

                endif;
                ?>
            </ul>
        </div>
    </div>
</nav>
<?php
if (isset($_COOKIE['existpro'])):
?>
<div class="p-4 mb-4 text-sm mt-2 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium"><?=$_COOKIE['existpro']?></span>
</div>
<?php
endif;
?>
<?php
if (isset($_COOKIE['gologin'])):
?>
<div class="p-4 mb-4 text-sm mt-2 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">you are not login</span> please login first.
</div>
<?php
endif;
?>
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


