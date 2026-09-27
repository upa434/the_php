<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = "aufa"; //Global scoope

function sayHello()
{
    global $name; //global keyword
echo $name . PHP_EOL;
}
sayHello();



