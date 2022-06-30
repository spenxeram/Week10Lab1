<?php
include "core/init.php";
include "core/DB.php";
//include "core/Router.php";
DB::createInstance();
DB::connect("localhost", "root", "", "2022mvc2");

define("ROOT", substr($_SERVER['PHP_SELF'], 0, -9));
define("PUBLIC_ROOT", ROOT . "public/");
spl_autoload_register(function($class) {
    if(file_exists("core/" . $class . ".php")) {
        include_once "core/" . $class . ".php";
    } else if(file_exists("middleware/" . $class . ".php")) {
        include_once "middleware/" . $class . ".php";
    } else if(file_exists("controllers/" . $class . ".php")) {
        include_once "controllers/" . $class . ".php";
    } else if(file_exists("models/" . $class . ".php")) {
        include_once "models/" . $class . ".php";
    }  
});
include "core/web.php";
