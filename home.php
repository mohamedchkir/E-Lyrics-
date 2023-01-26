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
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="assets/img//I1957ejcPJjg3JPArHIqKhgmLW5GMZ22WqqrWCMo.jpg" type="image/jpg">
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
                <div class="bg-gray-900 min-h-screen">
                    <div class="p-4 pt-28 pb-0  pl-10 font-bold text-gray-50">Statistics</div>
                    <div class=" mt-8 grid lg:grid-cols-3 sm:grid-cols-2 p-4 gap-10 ">
                        <!--Grid starts here-->
                        <div class="flex items-center justify-between p-5 bg-amber-300  rounded shadow-sm">
                            <div>
                                <div class="font-black text-xl text-gray-900 ">Music</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-50 "><?php echo $stat->countMusic()['COUNT(id)'] ?></div>
                                </div>
                            </div>
                            <div class="text-gray-500 text-4xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-gray-50">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />
                                </svg>


                            </div>
                        </div>

                        <div class="flex items-center justify-between p-5 bg-amber-300  rounded shadow-sm">
                            <div>
                                <div class="font-black text-xl text-gray-900 ">Admins</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-50 "><?php echo $stat->countAdmin()['COUNT(id)'] ?></div>
                                </div>
                            </div>
                            <div class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-9 h-9 text-gray-50">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>


                            </div>
                        </div>

                        <div class="flex items-center justify-between p-5 bg-amber-300  rounded shadow-sm">
                            <div>
                                <div class="font-black text-xl text-gray-900 ">Artiste</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-50 "><?php echo $stat->countArtist()['COUNT(id)'] ?></div>
                                </div>
                            </div>
                            <div class="text-gray-500 text-4xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-gray-50">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>

                            </div>
                        </div>

                        <!-- Grid ends here..-->

                    </div>
                    <div class="p-4 pt-28 pb-0  pl-10 font-bold text-gray-50">Music</div>

                    <div class="cards">
                        <!-- cards Music -->
                        <?php $res = $stat->getAll();
                        ?>
                        <?php foreach ($res as $r) { ?>
                            <div class="p-10 ">
                                <h3 class="text-gray-50 mb-3 font-bold font-mono text-xl">
                                    <?php echo $r["name_Artist"] ?>
                                </h3>
                                <a href="music.php?musicId=<?php echo $r["music_id"] ?>" target="_blank">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        <h2 class="text-2xl font-bold mb-2 text-gray-800"><?php echo $r["title"] ?></h2>
                                        <p class="text-gray-700"><?php echo $r["album"] ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
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