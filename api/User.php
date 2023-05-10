<?php
include 'DB.php';
class User{
    $DB;
    
    function __User(){
        $DB = new DB();
    }

    static function isUserNamePresent($userName){
        $result = $connection->prepare("SELECT username FROM Users where username =". $userName."';");
        $result->execute();
        if($result = $stmt->setFetchMode(PDO::FETCH_ASSOC) ){
            return true;
        }else{
            return false;
        }
        $row = $result->fetch_assoc();
    }
    static function insert(){}
    static function delete(){}
    static function update(){}
}
User::isUserNamePresent('a');
?>
