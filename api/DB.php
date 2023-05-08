<?php
$serverName = "localhost";
$userName = "spacerepetation";
$password = "sprite";
$dbName = "spacerepetation";
$connection;

try {
    $connection = new PDO("mysql:host=".$serverName.";dbname=".$dbName, $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>