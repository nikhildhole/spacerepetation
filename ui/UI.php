<?php
class UI{
    public static function header(){}

    public static function main(){
        if($_GET['url'] == '/spacerepetition/'){
            include(__DIR__.'\main\login.html');
        } else{
            return true;
        }
        echo $_GET['url'];

        return false;
    }

    public static function footer(){}
}
?>