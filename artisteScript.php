<?php


class Artiste extends Database
{
    public $id;
    public $name;

    public function getArtiste()
    {
        $query = "SELECT * FROM `artiste`";
        $stmt = $this->connection()->prepare($query);

        $stmt->execute();
        return $stmt;
    }
}
