<?php
    require_once '../config/database.php';
class userModel {
    public static function teste(){
           $pdo = getConnection(); 

                $sql = "SELECT nome, email FROM usuarios"; // Prepara a query.
                $stmt = $pdo->query($sql); // Faz a consulta.
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}