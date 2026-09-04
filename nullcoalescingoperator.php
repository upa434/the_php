<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = [
    "action" => "create"
];

if (isset($data["action"])){
    $action = $data["action"];
}else {
    $action = "Nothing";
}

echo $action . PHP_EOL;


// mempersingkat jika tidak banyak operasi logika yg dilakukan

$data= [
    "action" => "create"
]; 
$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;
echo $data . PHP_EOL;

