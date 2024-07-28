<?php
include '../master/header.php';
include '../config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/output.css">
    <title>shop</title>
</head>
<body id="back">

<div class="font-sans text-gray-950 antialiased flex flex-col items-center" id="login">
    <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white  overflow-hidden sm:rounded-lg shadow-2xl">
        <form action="../register/register.php" method="POST">
            <div class="block font-medium text-md text-gray-700">
                <?php

                if (isset($_COOKIE['exist'])):

                    ?>
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <?= $_COOKIE['exist'] ?>
                    </div>
                <?php


                endif;
                ?>
                <label for="name" class="block font-medium text-lg text-gray-700"> Name:</label>
                <input class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" type="text" name="name" placeholder=" Enter your name"><br>

                <label for="email" class="block font-medium text-lg text-gray-700"> E-mail:</label>
                <input type="text" name="email" placeholder=" Enter your email" class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]"><br>

                <label for="username" class="block font-medium text-lg text-gray-700">User Name:</label>
                <input type="text" name="username" placeholder=" Enter your username" class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]"><br>

                <label for="pass" class="block font-medium text-lg text-gray-700">password:</label>
                <input type="number" name="password" placeholder=" Enter your password" class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]"><br>

                <div class="ms-3">
                    <button class="mt-2 bg-transparent hover:bg-blue-300 text-blue-700 font-medium hover:text-white py-1 px-1 border border-blue-500 hover:border-transparent shadow-inner rounded " onclick="location.href='../login'" type="button">back to login</button>
                    <button  class="bg-transparent hover:bg-blue-500 text-blue-700 font-medium hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded" id="loginbutton">sing up</button>
                </div>

            </div>

        </form>

    </div>

</div>


</body>
</html>