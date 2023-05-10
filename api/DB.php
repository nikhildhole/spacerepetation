<?php

class DB{
    static private $serverName = "localhost";
    static private $userName = "spacerepetation";
    static private $password = "sprite";
    static private $dbName = "spacerepetation";
    static private $conn;

    function __construct(){
        try {
            $conn = new PDO("mysql:host=".$serverName.";dbname=".$dbName, $userName, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    
    function selectQuery($query = null, $param[] = null){
        try{
            $stmt = $conn->prepare($query);
            $stmt->execute($param[]);
            $result = $stmt->fetchAll();
            return $result;
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    function executeQuery($query = null, $param[] = null){
        try{
            $stmt = $conn->prepare($query);
            $stmt->execute($param[]);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    function __destruct(){
        $conn = null;
    }

}
?>
