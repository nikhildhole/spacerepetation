<?php
require_once('DB.php');
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
        $conn = new DB();
        $conn = $conn->getConnect();
        $stmt = $conn->prepare("SELECT 'a' FROM Users where username = ?");
        $result = $stmt->setFetchMode(PDO::FETCH_NUM);
        //$result = $stmt->execute([$userName]);
        foreach ($stmt as $row) {
            print $row[0];
        }
    }
}
User::isUserNamePresent('a');
?>