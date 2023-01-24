<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title> Log In</title>
  <link rel="icon" href="assets/img//I1957ejcPJjg3JPArHIqKhgmLW5GMZ22WqqrWCMo.jpg" type="image/jpg">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <section>
    <div class="bg-gray-900 bg-cover flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-50">
        <img class="w-8 h-8 mr-2" src="./assets/img/I1957ejcPJjg3JPArHIqKhgmLW5GMZ22WqqrWCMo.jpg" alt="logo" />
        E-LyricS
      </a>
      <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <?php if (isset($_SESSION['message'])) : ?>
            <div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative' role='alert'>
              <strong class='font-bold'>Erreur!</strong>
              <span class='block sm:inline'><?php
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                            ?></span>
              <span class='absolute top-0 bottom-0 right-0 px-4 py-3'>
                <svg class='fill-current h-6 w-6 text-red-500' role='button' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'>
                  <title>Close</title>
                  <path d='M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z' />
                </svg>
              </span>
            </div>

          <?php endif ?>

          <form method="POST" class="space-y-4 md:space-y-6" action="loginScript.php">
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-50">Your email</label>
              <input type="email" name="email" id="email" class="bg-gray-50 border ring-2 ring-yellow-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 " placeholder="Your email" required="" />
            </div>
            <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-50">Password</label>
              <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border ring-2 ring-yellow-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="" />
            </div>
            <button type="submit" name="login" class="w-full text-white bg-gray-200 hover:bg-primary-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
              Log In
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

</body>

</html>