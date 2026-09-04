<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Indexed Array
$names = ["Aufanur", "Developer"];
var_dump($names);

$names[0] = "Backend Engineer";
var_dump($names);

$names[0] = null;
var_dump($names);

unset($names[0]);
var_dump($names);

$names[] = "Admin";
var_dump($names);
var_dump(count($names));

// Associative Array
$user = [
    "id" => "usr_01",
    "name" => "Aufanur",
    "age" => 22
];

var_dump($user);
var_dump($user["id"]);
 