<?php
require './config/db.php';
session_start();

class Music extends Database
{
    public $id;
    public $title;
    public $date;
    public $album;
    public $lyrics;
    public $artiste;

    public function create($title, $date, $album, $lyrics, $artiste)
    {

        $query = "INSERT INTO `music`(`title`, `date_creation`, `album`, `lyrics`,`artiste_id`) VALUES ('$title','$date','$album','$lyrics','$artiste')";
        $stmt = $this->connection()->prepare($query);
        if ($stmt->execute()) {
            $_SESSION["musicMessage-success"] = "Article has been created successfully!";
            header("location: ./dashboard.php");
        } else {
            $_SESSION["musicMessage-field"] = "Sorry something went wrong.";
            header("location: ./dashboard.php");
        }
    }
    public function update($id, $name, $date, $album, $lyrics)
    {
        $query = "UPDATE `music` SET `name`='$name',`date-creation`='$date',`album`='$album',`lyrics`='$lyrics' WHERE `id` = $id";
        $stmt = $this->connection()->prepare($query);

        if ($stmt->execute()) {
            $_SESSION["musicMessage-success"] = "Article has been updated successfully!";
            header("location: ./dashboard.php");
        } else {
            $_SESSION["musicMessage-field"] = "Sorry something went wrong.";
            header("location: ./dashboard.php");
        }
    }
    public function getAll()
    {
        $query = "SELECT m.title as title , m.date_creation as date , m.album as album , m.lyrics as lyrics , ar.name as name_Artist from music as m INNER JOIN artiste as ar 
        ON m.artiste_id = ar.id";
        $stmt = $this->connection()->prepare($query);

        $stmt->execute();

        return $stmt;
    }
    public function delete($id)
    {
        $query = "DELETE FROM `music` WHERE `id` = $id";
        $stmt = $this->connection()->prepare($query);
        if ($stmt->execute()) {
            $_SESSION["musicMessage-success"] = "Article has been deleted successfully!";
            header("location: ../dashboard.php");
        } else {
            $_SESSION["musicMessage-field"] = "Sorry something went wrong.";
            header("location: ../dashboard.php");
        }
    }
    public function getById($id)
    {
        $query = "SELECT * FROM `music` WHERE `id` = $id";
        $stmt = $this->connection()->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
