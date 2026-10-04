<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

echo "Hello world" . PHP_EOL;

$user = [
    "name" => "Aufanur",
    "id" => "user123",
    "asal" => "Indonesia",

];
echo $user["name"];
