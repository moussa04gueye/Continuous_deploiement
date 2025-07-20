<?php
$host = 'localhost';
$db   = 'crud_db';
$user = 'root';
$pass = 'TDSI?mcs123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    exit('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>
