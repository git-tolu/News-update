<?php

require "config.php";

class Dbc extends Database
{

    public function validateInput($param)
    {
        return (!empty($value));
    }

    public function registerUser($userName, $userEmail, $userPassword)
    {
        $sql = "INSERT INTO  users (userName, userEmail, userPassword) VALUES (:userName, :userEmail, :userPassword)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            "userName" => $userName,
            "userEmail" => $userEmail,
            "userPassword" => $userPassword
        ]);
    }
}
