<?php
class Validation{
    public function registerUser($email){
        include "dashboard/config/db_connect.php";
        $sql = "INSERT INTO users (email) VALUES (?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$email]);
        return $result;
    }

    public function getUserByEmail($email){
        include "dashboard/config/db_connect.php";
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>