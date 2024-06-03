<?php

$host = 'localhost';
$db   = 'pdo_winkel';
$charset = 'utf8mb4';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try 
{
     $pdo = new PDO($dsn, $user, $pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "connected to database: $db";
} catch (\PDOException $e) {
     echo "connectie gefaald!";
     throw new \PDOException($e->getMessage());
}
