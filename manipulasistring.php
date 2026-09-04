<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = "Nino Nakano";
echo "Name : " . $name . PHP_EOL ;
echo "Age : " . 18 . PHP_EOL;

$valuestring = (string)100;
var_dump($valuestring);

$valueint = (int)"100";
var_dump($valueint);

$valuefloat = (float)"0.01";
var_dump($valuefloat);

$name = "Nino";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

$var = "Nino";
echo "This is {$Nino}s" . PHP_EOL;