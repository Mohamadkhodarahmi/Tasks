<?php
include_once 'config.php';


?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="stylesheet" href="/public/css/output.css">

<style>
body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    }
</style>

<div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
    <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">

    </aside>
    <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
        <div class="p-2 md:p-4">
            <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                <?php
                if (isset($_COOKIE['updateprof'])):
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
                            Your profile updated successfully
                        </p>
                    </div>
                <?php
                endif;
                ?>
                <h2 class="pl-6 text-2xl font-bold sm:text-xl">Public Profile</h2>

                <div class="grid max-w-2xl mx-auto mt-8">
                    <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

                        <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
                            src="<?= $_SESSION['prof'] ? "./public/img/user/{$_SESSION['prof']}" : "./public/img/prof.png" ?>"
                            alt="Bordered avatar">

                        <div class="flex flex-col space-y-5 sm:ml-8">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                Select Image File to Upload:
                                <input type="file" name="file" class="py-3.5 px-7 text-base font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                <input type="submit" name="submit" value="Upload" class="py-3.5 px-7 text-base font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                            </form>

                        </div>
                    </div>

                    <div class="items-center mt-8 sm:mt-14 text-[#202142]">
                        <form method="post" action="./updateuser.php">
                        <div
                            class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                            <div class="w-full">
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">name</label>
                                <input type="text" id="name" name="name"
                                    class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                    placeholder="Your first name" value="<?=$_SESSION['user'][0]?>" required>
                            </div>

                            <div class="w-full">
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Username</label>
                                <input type="text" id="last_name" name="username"
                                    class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                    placeholder="Your last name" value="<?=$_SESSION['user'][1]?>" required>
                            </div>

                        </div>

                        <div class="mb-2 sm:mb-6">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                email</label>
                            <input type="email" id="email" name="email"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="" value="<?=$_SESSION['user'][2]?>" >
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>