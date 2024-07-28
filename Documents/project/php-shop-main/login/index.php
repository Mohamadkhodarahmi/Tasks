<?php
include_once '../master/header.php';


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
    <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-2xl overflow-hidden sm:rounded-lg ">
        <div class="py-8">
            <center>
                <span class="text-2xl font-semibold">Log In</span>
            </center>
        </div>
        <?php

        if (isset($_COOKIE['wrong'])):

            ?>
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <?= $_COOKIE['wrong'] ?>
            </div>
        <?php


        endif;
        ?>

        <?php

        if (isset($_COOKIE['wrongemail'])):

            ?>
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <?= $_COOKIE['wrongemail'] ?>
            </div>
        <?php


        endif;
        ?>
        <?php

        if (isset($_COOKIE['register'])):

        ?>
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <?= $_COOKIE['register'] ?>
        </div>
        <?php


        endif;
        ?>
        <form action="../login/account.php" method="POST" >
            <div class="block font-medium text-md text-gray-700">
                <label for="email" class="block font-medium text-lg text-gray-700">  E-mail:</label>
                <input type="text" name="email" placeholder=" Enter your email" class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]"><br>

                <label for="name" class="block font-medium text-lg text-gray-700"> password:</label>
                <input class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" type="text" name="password" placeholder=" Enter your password" ><br>

                <div class="ms-14">
                    <button class="bg-transparent hover:bg-blue-300 text-blue-700 font-medium hover:text-white py-1 px-1 border border-blue-500 hover:border-transparent rounded " onclick="location.href='../register'" type="button">register</button>
                    <button type="submit" class="mt-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded" id="loginbutton">login</button>
                </div>
            </div>

        </form>
    </div>
</div>


</body>
</html>





