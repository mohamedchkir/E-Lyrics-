<?php
include_once("musicScript.php");

$music = new Music();
if (isset($_POST['saveMusic'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $album = $_POST['album'];
    $lyrics = $_POST['lyrics'];
    $artiste = $_POST['artist'];

    // var_dump($date); //2022-02-12 00:00:00


    $music->create($title, $date, $album, $lyrics, $artiste);
}
