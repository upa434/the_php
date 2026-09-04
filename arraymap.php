<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = [
    "id" => "usr_01",
    "name" => "Aufanur",
    "age" => 22,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];

var_dump($user);
var_dump($user["address"]);
    

