<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="icon" href="assets/img//I1957ejcPJjg3JPArHIqKhgmLW5GMZ22WqqrWCMo.jpg" type="image/jpg">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
</head>

<body>
  <style>
    ul.breadcrumb li+li::before {
      content: "\276F";
      padding-left: 8px;
      padding-right: 4px;
      color: inherit;
    }

    ul.breadcrumb li span {
      opacity: 60%;
    }

    #sidebar {
      -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
      transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
    }

    #sidebar.show {
      transform: translateX(0);
    }

    #sidebar ul li a.active {
      background: #1f2937;
      background-color: #1f2937;
    }
  </style>

  <!-- Navbar start -->
  <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-end bg-gray-700 px-4 sm:justify-between">
    <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
      <li class="inline">
        <a href="#">Main</a>
      </li>
      <li class="inline">
        <span>Homepage</span>
      </li>
    </ul>
    <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
      <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
      <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden h-8 w-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </nav>
  <!-- Navbar end -->

  <!-- Sidebar start-->
  <div id="containerSidebar" class="z-40">
    <div class="navbar-menu relative z-40">
      <nav id="sidebar" class="fixed flex -translate-x-full flex-col sm:max-w-xs lg:w-80 show">
        <!-- one category / navigation group -->

        <!-- navigation group end-->

        <div class="min-h-screen flex flex-row">
          <div class="flex flex-col w-56 bg-white rounded-r-3xl overflow-hidden">
            <div class="flex items-center justify-center h-20 shadow-md">
              <h1 class="text-3xl uppercase text-indigo-500">E- <span class="text-3xl uppercase text-amber-500">Lyrics</span></h1>
            </div>
            <ul class="flex flex-col py-4">
              <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
                  <span class="text-sm font-medium">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-music"></i></span>
                  <span class="text-sm font-medium">Music</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-drink"></i></span>
                  <span class="text-sm font-medium">Drink</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                  <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>
                  <span class="text-sm font-medium">Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- example copies end -->
      </nav>
    </div>
    <div class="mx-auto lg:ml-80"></div>
  </div>
  <!-- Sidebar end -->

  <main>
    <!-- your content goes here -->
  </main>

  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
      const navbar = document.getElementById("navbar");
      const sidebar = document.getElementById("sidebar");
      const btnSidebarToggler = document.getElementById("btnSidebarToggler");
      const navClosed = document.getElementById("navClosed");
      const navOpen = document.getElementById("navOpen");

      btnSidebarToggler.addEventListener("click", (e) => {
        e.preventDefault();
        sidebar.classList.toggle("show");
        navClosed.classList.toggle("hidden");
        navOpen.classList.toggle("hidden");
      });

      sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
  </script>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>