<?php
require_once 'musicScript.php';

if (!isset($_GET['musicId']) || $_GET['musicId'] == '') {
    header('location: home.php');
}

$music = new Music();
$m = $music->getById($_GET['musicId']);

if (!$m) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="icon" href="./assets/img/I1957ejcPJjg3JPArHIqKhgmLW5GMZ22WqqrWCMo.jpg" type="image/jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <title>Music</title>
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
                    <ul class="flex   justify-between p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        <li>
                            <a href="home.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:text-blue-900 md:hover:bg-transparent md:border-0 md:text-blue-700 md:p-0 " aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="dashboard.php" class="block py-2 pl-3 pr-4 text-gray-700  rounded hover:text-blue-900 md:bg-transparent md:text-gray-700 md:p-0">Music</a>
                        </li>
                        <div class="logout">
                            <li>
                                <a href="logout.php" class="block py-2 pl-3 pr-4 text-white  rounded hover:text-red-900 md:bg-transparent md:text-red-500 md:p-0">Log Out</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="flex-auto">
            <div class="flex flex-col">
                <div class="bg-gray-900 min-h-screen text-gray-50">
                    <div class="p-4 pt-10 pb-0  pl-10 font-bold  text-5xl flex justify-center">Music</div>
                    <div class="pl-10 pt-20">
                        <p class="text-2xl"><?= $m['title'] ?></p>
                        <p class="text-lg ml-3"><i class="fa-solid fa-calendar-days mr-3"></i><?= $m['date_creation'] ?></p>
                        <p class="text-lg ml-3"><i class="fa-solid fa-compact-disc mr-3"></i><?= $m['album'] ?></p>
                        <p class="text-lg">Lyrics : <?= $m['lyrics'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>





</body>

</html>