<?php
class DB{
    private static $serverName = "localhost";
    private static $userName = "spacerepetation";
    private static $password = "sprite";
    private static $dbName = "spacerepetation";
    private $connection;

    function getConnect(){
        try {
            $connection = new PDO("mysql:host=".self::$serverName.";dbname=".self::$dbName, self::$userName, self::$password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $connection;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}
?>