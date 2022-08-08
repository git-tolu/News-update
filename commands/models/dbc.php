<?php
session_start();
require "config.php";

class Dbc extends Database
{

    public function validateInput($param)
    {
        return (!empty($param));
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

        return true;
    }

    public function emailCheck($email)
    {
        $sql = "SELECT userEmail FROM users WHERE userEmail = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            "email" => $email
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function passwordRegex($password)
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
    
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            return "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
        }
    }

    public function login($email)
    {
        $sql = "SELECT userEmail, userPassword FROM users WHERE userEmail = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            "email" => $email
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
