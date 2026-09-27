<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function createName()
{
    $name = "aufa"; //local scope
}

createName();

echo $name . PHP_EOL;