<?php
include_once "musicScript.php";
include_once "artisteScript.php";
$music = new Music;
$artist = new Artiste;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="icon" href="assets/img//I1957ejcPJjg3JPArHIqKhgmLW5GMZ22WqqrWCMo.jpg" type="image/jpg">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!--Replace with your tailwind.css once created-->
  <!--Regular Datatables CSS-->
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <!--Responsive Extension Datatables CSS-->
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

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
              <a href="home.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Home</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Music</a>
            </li>
        </div>
        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="sm:hidden md:block	 w-10 h-10 rounded-full cursor-pointer" src="./assets/img/profile-img.jpg" alt="User dropdown">
        <!-- Dropdown menu -->
        <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 ">
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
        <div class="bg-gray-900 h-screen">
          <div class="mt-9 text-gray-900 tracking-wider leading-normal">
            <!-- Main modal -->

            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
              <div class="relative w-full h-full max-w-md md:h-auto">
                <!-- Modal content -->

                <div class="relative bg-white rounded-lg shadow">
                  <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Music Add:</h3>
                    <form method="post" class="space-y-6" action="operation.php">
                      <input type="hidden" id="id" name="song-id" value="">
                      <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Music Name</label>
                        <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                      </div>
                      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Artist</label>
                      <select id="artist" name="artist" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose an Artist</option>
                        <?php $res = $artist->getArtiste();
                        ?>

                        <?php foreach ($res as $ART) { ?>
                          <option value="<?php echo $ART["id"] ?>"><?php echo $ART["name"] ?> </option>
                        <?php } ?>
                      </select>
                      <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Album</label>
                        <input type="text" id="album" name="album" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                      </div>
                      <div class="mb-6">
                        <label for="floatingInput" class="text-gray-700">Select a date</label>
                        <input id="date" name="date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
                      </div>


                      <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                          <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700">Msic Lyrics</label>
                          <textarea id="lyrics" name="lyrics" class="
        form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
        rounded
        transition
        ease-in-outm-0focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      " id="exampleFormControlTextarea1" rows="3" placeholder="Your lyrics"></textarea>
                        </div>
                      </div>

                      <button name="save" id="save" class="block bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Save
                      </button>
                      <button name="edit" id="edit" class="hidden bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        edit
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Container-->
            <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
              <!-- Modal toggle -->
              <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-green-500 hover:bg-green-700   font-medium rounded-full text-sm px-5 py-2.5 text-center" type="button">
                <i class="fa-solid fa-plus"></i>
              </button>
              <!--Card-->
              <div id='recipients' class="p-8 mt-2 lg:mt-0 rounded bg-white">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                  <thead>
                    <tr>
                      <th data-priority="1">Artiste Name</th>
                      <th data-priority="2">Music </th>
                      <th data-priority="3">Album</th>
                      <th data-priority="5">date</th>
                      <th data-priority="5">Music Lyics</th>
                    </tr>


                  </thead>
                  <tbody>
                    <?php $res = $music->getAll();
                    ?>
                    <?php foreach ($res as $r) { ?>

                      <tr id="<?php echo $r['music_id']; ?>">

                        <td artist_name=<?php echo $r["id_artist"]; ?>><button onclick="editeMusic(<?php echo $r['music_id']; ?>)" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class=" px-2  cursor-pointer">
                            <i class="fas fa-edit" style="color: green;"></i>
                          </button>
                          <form action="operation.php" method="post">
                            <input type="hidden" id="id" name="song" value="<?php echo $r['music_id'] ?>">
                            <button name="delete" value="" class="px-2 cursor-pointer">
                              <i class="fas fa-trash-alt" style="color: Tomato;"></i>
                            </button>
                          </form>
                          <?php echo $r["name_Artist"] ?>
                        </td>
                        <td <?php echo $r["title"] ?>> <?php echo $r["title"] ?></td>
                        <td <?php echo $r["album"] ?>><?php echo $r["album"] ?></td>
                        <td <?php echo $r["date"] ?>><?php echo $r["date"] ?></td>
                        <td class="w-9" <?php echo $r["lyrics"] ?>><?php echo $r["lyrics"] ?></td>
                      </tr>
                    <?php } ?>



                  </tbody>
                </table>
              </div>
              <!--/Card-->
            </div>
            <!--/container-->
          </div>
        </div>
      </div>
    </div>
  </section>

</body>


<!-- link js file -->
<script src="./assets/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script>
  $(document).ready(function() {

    var table = $('#example').DataTable({
        responsive: true
      })
      .columns.adjust()
      .responsive.recalc();
  });
</script>

</html>