<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$name = "Aufa";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "is name null ";
var_dump (is_null($name));
echo "\n";

$istri = "nino :";
unset($istri);
$istri = "nakano nino ";
$istri = null;
var_dump (isset($istri));       