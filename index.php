<?php
require_once('ui/UI.php');

UI::header();
$error = UI::main();
if($error){
    include('error.php');
}
UI::footer();



?>