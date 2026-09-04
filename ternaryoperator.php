<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$gender = "PRIA";
$HI = null;
if ($gender == "PRIA"){
    $HI = "hai bro!";
} else{
    $HI = "hi nona!";
}

echo $HI . PHP_EOL;

// bisa dipersingkat lagi dengan ternary operator

$gender = "WANITA";
$Hi = $gender == "PRIA" ? "HI BRO" : "HI NONA";
echo  $Hi . PHP_EOL;