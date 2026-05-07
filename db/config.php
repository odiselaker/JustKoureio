<?php 

$host = 'database';
$port = '3306';
$dbname = 'koureiodb';
$username = 'root';
$password = "root";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("error: " . $e->getMessage());
}

?>