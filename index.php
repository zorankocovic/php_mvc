<?php


function autoloadFunction($class)
{
    if (preg_match('/Controller$/', $class))	
        require("controllers/" . $class . ".php");
    else
        require("models/" . $class . ".php");
}

spl_autoload_register("autoloadFunction");

$router = new RouterController();
$router->process(array($_SERVER['REQUEST_URI']));
$router->loadView();
?>