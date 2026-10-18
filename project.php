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
echo $user["name"] . PHP_EOL;

echo <<<AUFA
System information student on Universitas Lancang kuning 
AUFA;

echo PHP_EOL;

$Gender = "Pria";
$Usia = 20;

if ($Usia == 20){
    echo "Halo Aufa" . PHP_EOL;
}else{
    echo "Unknown user" . PHP_EOL;;
}


