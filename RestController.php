<?php
require_once 'MobileRestHandler.php';

//print_r($_GET);
$view = "";
if(isset($_GET['view']))
{
    $view=$_GET['view'];
} 

// Restful service URL mapping via $_GET

switch($view)
{
    case "all":
        // rest url kezelése /mobile/list/
        $mobileRestHandler = new MobileRestHandler();
        $mobileRestHandler->getAllMobiles();
        break;
    
    case "" :
        // 404 not found
        break;
}