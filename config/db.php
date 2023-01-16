<?php

abstract class Database
{
    private $localhost = "localhost";
    private $username = "root";
    private $db_name = "lyrics";
    private $db_password = "";

    protected function connection()
    {
        try {
            $pdo = new PDO("mysql:host=$this->localhost;dbname=$this->db_name", "$this->username", "$this->db_password");
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }
}
