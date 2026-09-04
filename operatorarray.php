<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$first = [
    "firts_name" => "Aufanur"
];

$last = [
    "last_name" => "Aufa"
];

$full = $first + $last;



$a = [
    "first_name" => "Aufanur",
    "last_name" => "Aufa"
];

$b = [
    "last_name" => "Aufa",
    "first_name" => "Aufanur"
];

var_dump($a == $b);
var_dump($a === $b);

