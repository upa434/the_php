<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$names = ["aufa", "nur", "coder"];

 for ($i = 0; $i < count($names); $i++) {
 echo "Data ke $i = $names[$i]" . PHP_EOL;
 }
// berikut cara yg lebih seimple

 foreach ($names as $name) {
         echo "Data $name" . PHP_EOL;
 }

 //dalam bentuk array map

 $person = [
    "firts_name" => "aufa",
    "middle_name" => "nur",
    "last_name" => "king"
 ];

 foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
 }

