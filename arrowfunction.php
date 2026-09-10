<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$firstname = "Aufa";
$lastname = "nur";

$arrowfunction = fn () => "Hello $firstname $lastname" . PHP_EOL;

echo $arrowfunction();