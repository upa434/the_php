<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$counter = 1;


for ( ;$counter <= 10 ; ){
    echo "ini adalah forloop ke-$counter" . PHP_EOL;
$counter++;
    }

//atau bisa juga perulangan dengan init dan posstatement
    for ( $counter = 1;$counter <= 10 ;$counter++ ){
    echo "ini adalah forloop ke-$counter" . PHP_EOL;

    }

    //atau alternatif
for ( $counter = 1;$counter <= 10 ;$counter++ ):
    echo "ini adalah forloop ke-$counter" . PHP_EOL;
endfor;
    

// jika true loop tak akan pernah berhenti




