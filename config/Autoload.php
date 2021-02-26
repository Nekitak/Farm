<?php

require_once ("../bootstrap.php");

spl_autoload_register(function($class)
{
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if(is_file($file))
        require_once $file;
});