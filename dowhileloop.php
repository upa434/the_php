<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$counter = 100;


do{
    echo "ini adalah forloop ke-$counter" . PHP_EOL;
$counter++;
    
}while($counter <= 10  );