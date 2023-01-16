<?php

include_once("../config/db.php");

class LoginModel extends Database
{

    public function getUser($email, $password)
    {
        $query = "SELECT * FROM user WHERE email = ? ;";
        $statement = $this->connection()->prepare($query);


        if (!$statement->execute(array($email))) {
            $statement = null;
            exit();
        }

        return $statement->fetch();
    }
}
