<?php
include_once("musicScript.php");

$music = new Music();
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $album = $_POST['album'];
    $lyrics = $_POST['lyrics'];
    $artiste = $_POST['artist'];

    $music->create($title, $date, $album, $lyrics, $artiste);
}

if (isset($_POST['edit'])) {
    $id = $_POST['song-id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $album = $_POST['album'];
    $lyrics = $_POST['lyrics'];
    $artiste = $_POST['artist'];

    $music->update($title, $date, $album, $lyrics, $artiste, $id);
}

if (isset($_POST['delete'])) {
    $id = $_POST['song-id'];

    $music->delete($id);
}
