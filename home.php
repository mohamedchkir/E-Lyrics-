<?php
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
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
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
                                <div class="text-sm text-gray-400 ">Numbers of users</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-600 ">34</div>
                                </div>
                            </div>
                            <div class="text-gray-500 text-4xl">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-5 bg-white rounded shadow-sm">
                            <div>
                                <div class="text-sm text-gray-400 ">Check Out Today</div>
                                <div class="flex items-center pt-1">
                                    <div class="text-3xl font-medium text-gray-600 ">44</div>
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
                    <div div class=" mt-5 grid  lg:grid-cols-3  md:grid-cols-3 p-4 gap-3">

                        <div class="col-span-2 flex flex-col   p-8 bg-white rounded shadow-sm">
                            <b class="flex flex-row text-gray-500 text-3xl">Latest</b>

                        </div>

                        <div class=" flex flex-col   p-5 bg-white rounded shadow-sm">
                            <b class="flex flex-row text-gray-500 text-3xl">Artists</b>

                        </div>



                    </div>
                    <!--Table-->
                    <div class="p-4 pl-10 font-bold text-gray-600">Users</div>
                    <div class="grid  lg:grid-cols-1  md:grid-cols-1 p-4 gap-3">
                        <div class="col-span-2 flex flex-auto items-center justify-between  p-5 bg-white rounded shadow-sm">
                            <table class="min-w-full divide-y divide-gray-200 table-auto">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Role
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="img.jpg" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        YSR
                                                    </div>

                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span>
                                                <div class="text-sm text-gray-500">
                                                    yassir@example.com
                                                </div>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Admin
                                        </td>

                                    </tr>


                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</body>

</html>