<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Post-increment:', PHP_EOL;
$a = 5;
var_dump($a++);
var_dump($a);

echo 'Pre-increment:', PHP_EOL;
$a = 5;
var_dump(++$a);
var_dump($a);

echo 'Post-decrement:', PHP_EOL;
$a = 5;
var_dump($a--);
var_dump($a);

echo 'Pre-decrement:', PHP_EOL;
$a = 5;
var_dump(--$a);
var_dump($a);