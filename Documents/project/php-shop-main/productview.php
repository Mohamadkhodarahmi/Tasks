<?php
include_once 'config.php';

while ($items = $result->fetch_assoc()):
    if ($_GET['pro_id'] == $items['id']):
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
            <script src=
                    "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
            </script>
        </head>
        <body>
        <div class="flex md:flex-row justify-center  items-center mx-4 py-10">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg ring-4 ring-red-500 ring-opacity-40 max-w-sm">
                <div class="relative">
                    <img class="object-cover w-full h-full" src="./public/img/<?= $items["image"] ?>" alt="Product">
                    <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">
                        SALE
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium mb-2"><?= $items["productname"] ?></h3>
                    <p class="text-gray-600 text-sm mb-4"><?= $items["descpription"] ?></p>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-lg">$<?= $items["price"] ?> USD</span>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Buy Now
                        </button>
                        <form method="post" action="cart.php?pro_id=<?= $items["id"] ?>">
                            <input type="hidden" name="add" value="pro_id=<?= $items["id"] ?>">
                            <button type="submit" class="flex items-center px-2 py-1  gap-x-2 bg-blue-600 border-2 border-blue-600 hover:bg-transparent rounded text-white hover:text-inherit">
                                Add to cart
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                     height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-
                                .44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15
                                .401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM403.029 192H360v-60c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v60h-43.029c-10.691 0-16.045 12.926-8.485 20.485l67.029 67.029c4.686 4.686 12.284 4.686 16.971 0l67.029-67.029c7.559-7.559 2.205-20.485-8.486-20.485z"></path>
                                </svg>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </body>

        </html>


    <?php
    endif;
endwhile;
?>


