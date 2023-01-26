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


        $query = "INSERT INTO `music`(`title`, `date_creation`, `album`, `lyrics`,`artiste_id`) VALUES (?,?,?,?,?)";
        $stmt = $this->connection()->prepare($query);
        if ($stmt->execute(array($title, $date, $album, $lyrics, $artiste))) {
            $_SESSION["success"] = "Article has been created successfully!";
            header("location: ./dashboard.php");
        } else {
            $_SESSION["field"] = "Sorry something went wrong.";
            header("location: ./dashboard.php");
        }
    }


    public function update($title, $date, $album, $lyrics, $artiste, $id)
    {

        $query = "UPDATE `music` SET `title`=?,`date_creation`=?,`album`=?,`lyrics`=?,`artiste_id`=? WHERE id = ? ";
        $stmt = $this->connection()->prepare($query);

        if ($stmt->execute(array($title, $date, $album, $lyrics, $artiste, $id))) {
            $_SESSION["success"] = "Article has been updated successfully!";
            header("location: ./dashboard.php");
        } else {
            $_SESSION["field"] = "Sorry something went wrong.";
            header("location: ./dashboard.php");
        }
    }


    public function getAll()
    {
        $query = "SELECT m.id as music_id ,m.title as title , m.date_creation as date , m.album as album , m.lyrics as lyrics, m.artiste_id as id_artist , ar.name as name_Artist from music as m INNER JOIN artiste as ar 
        ON m.artiste_id = ar.id";
        $stmt = $this->connection()->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function delete($id)
    {
        $query = "DELETE FROM `music` WHERE `id` = ?";
        $stmt = $this->connection()->prepare($query);
        if ($stmt->execute(array($id))) {
            $_SESSION["delete-success"] = "Article has been deleted successfully!";
            header("location: ./dashboard.php");
        } else {
            $_SESSION["delete-field"] = "Sorry something went wrong.";
            header("location: ./dashboard.php");
        }
    }
    public function getById($id)
    {
        $query = "SELECT * FROM `music` WHERE `id` = ?";
        $stmt = $this->connection()->prepare($query);
        $stmt->execute(array($id));

        return $stmt->fetch();
    }






    function countMusic()
    {
        $requete = "SELECT COUNT(id) FROM music";
        $stmt = $this->connection()->prepare($requete);
        $stmt->execute();

        return $stmt->fetch();
    }
    function countAdmin()
    {
        $requete = "SELECT COUNT(id) FROM user";
        $stmt = $this->connection()->prepare($requete);
        $stmt->execute();

        return $stmt->fetch();
    }
    function countArtist()
    {
        $requete = "SELECT COUNT(id) FROM artiste";
        $stmt = $this->connection()->prepare($requete);
        $stmt->execute();

        return $stmt->fetch();
    }
}
