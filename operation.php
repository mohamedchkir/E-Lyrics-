<?php
include_once("musicScript.php");

$music = new Music();
if (isset($_POST['saveMusic'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $album = $_POST['album'];
    $lyrics = $_POST['lyrics'];
    $music->create($title, $date, $album, $lyrics);
}
