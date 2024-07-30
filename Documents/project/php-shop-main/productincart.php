<?php
include_once "config.php";
foreach ($proResult->fetch_all(1) as $row):
?>

    <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
<!--        <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="product-image" class="w-full rounded-lg sm:w-40" />-->
        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
            <div class="mt-5 sm:mt-0">
                <h2 class="text-lg font-bold text-gray-900"><?=$row['productname']?></h2>
               <small><?=$row['descpription']?></small>
            </div>
            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                <div class="flex items-center border-gray-100">
<!--                    <span class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"> - </span>-->
<!--                    <input class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number" value="2" min="1" />-->
<!--                    <span class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"> + </span>-->
                </div>
                <p class="text-md ">$<?=$row['price']?></p>
                <div class="flex  items-center  space-x-4">
                    <form action="deleteincart.php?del_id=<?=$row['id']?>" method="post">
                        <input type="hidden" name="add" value="del_id=<?= $row["id"] ?>">
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300
                         font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ms-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" >delete</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
<?php

endforeach;

?>