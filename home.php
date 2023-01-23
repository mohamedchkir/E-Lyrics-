<?php
require_once 'musicScript.php';
// if (!isset($_SESSION['email']));
// header('location: loginView.php');

$stat = new Music();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
            <div class="container flex flex-wrap items-center justify-between mx-auto px-4">
                <a href="#" class="flex items-center">
                    <img src="./assets/img/I1957ejcPJjg3JPArHIqKhgmLW5GMZ22WqqrWCMo.jpg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">E-Lyrics</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200  " aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        <li>
                            <a href="home.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="dashboard.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Music</a>
                        </li>
                </div>
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="./assets/img/profile-img.jpg" alt="User dropdown">
                <!-- Dropdown menu -->
                <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>Mohamed chkir</div>
                        <div class="font-medium truncate">mohamedchkir2@gmail.com</div>
                    </div>
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Settings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="flex-auto">
            <div class="flex flex-col">
                <div class="bg-blue-50 min-h-screen">
                    <div class="p-4 pt-28 pb-0  pl-10 font-bold text-gray-600">Statistics</div>
                    <div class=" mt-8 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 ">
                        <!--Grid starts here-->
                        <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                            <div>
                                <div class="text-sm text-gray-400 ">Music</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-600 "><?php echo $stat->countMusic()['COUNT(id)'] ?></div>
                                </div>
                            </div>
                            <div class="text-gray-500 text-4xl">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                            <div>
                                <div class="text-sm text-gray-400 ">Users</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-600 "><?php echo $stat->countAdmin()['COUNT(id)'] ?></div>
                                </div>
                            </div>
                            <div class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                            <div>
                                <div class="text-sm text-gray-400 ">Total Songs</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-600 ">10</div>
                                </div>
                            </div>
                            <div class="text-gray-500 text-4xl">
                                <i class="fa-solid fa-compact-disc"></i>
                            </div>
                        </div>

                        <!-- Grid ends here..-->

                    </div>
                    <div class="p-4 pt-28 pb-0  pl-10 font-bold text-gray-600">Music</div>

                    <div class="cards">
                        <!-- card with no image -->

                        <div class="p-20 ">
                            <h3 class="text-blue-300 mb-4 text-sm font-bold">
                                Card with no image
                            </h3>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-2 text-gray-800">Card with no image</h2>
                                <p class="text-gray-700">This is my cool new card!</p>
                            </div>
                        </div>
                        <div class="p-20 ">
                            <h3 class="text-blue-300 mb-4 text-sm font-bold">
                                Card with no image
                            </h3>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-2 text-gray-800">Card with no image</h2>
                                <p class="text-gray-700">This is my cool new card!</p>
                            </div>
                        </div>
                        <div class="p-20 ">
                            <h3 class="text-blue-300 mb-4 text-sm font-bold">
                                Card with no image
                            </h3>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <h2 class="text-2xl font-bold mb-2 text-gray-800">Card with no image</h2>
                                <p class="text-gray-700">This is my cool new card!</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>





</body>
<script src="./assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
<!-- link js file -->
<script src="./assets/js/script.js"></script>
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</html>