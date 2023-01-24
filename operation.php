<?php
include_once("musicScript.php");

$music = new Music();
if (isset($_POST['save'])) {
    for ($i = 0; $i < count($_POST['title']); $i++) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $album = $_POST['album'];
        $lyrics = $_POST['lyrics'];
        $artiste = $_POST['artist'];

        $music->create($title[$i], $date[$i], $album[$i], $lyrics[$i], $artiste[$i]);
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['song-id'];

    for ($i = 0; $i < count($_POST['title']); $i++) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $album = $_POST['album'];
        $lyrics = $_POST['lyrics'];
        $artiste = $_POST['artist'];
        $music->update($title[$i], $date[$i], $album[$i], $lyrics[$i], $artiste[$i], $id);
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['song'];

    $music->delete($id);
}
