<?php
include 'DB.php';
class User{
    private $userName;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $photo;
    private $time;
    private $isActive;

    function __construct($userName, $password, $firstName, $lastName, $email, $photo=null){

    }

    function getUserName(){}

    function setPassword(){}

    function getFirstName(){}

    function getLastName(){}

    function getEmail(){}

    function getPhoto(){}

    function getTime(){}

    function getIsActive(){}

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
}
User::isUserNamePresent('a');
?>