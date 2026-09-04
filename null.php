<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = "Aufanur";
$name = NULL;

$age = null;

$name = "Aufanur";
$age = 22;
$is_rich = NULL;

echo $name; 
// Hasil: Aufanur

var_dump($name); 
// Hasil: string(6) "Aufanur" (Artinya: Ini string, panjangnya 6 huruf, isinya Aufanur)

var_dump($is_rich); 
// Hasil: NULL (Si detektif konfirmasi kalau ini beneran kosong)



