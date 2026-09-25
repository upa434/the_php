<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Manual Lengkap PHP String Functions:
 * https://www.php.net/manual/en/ref.strings.php
 */

var_dump(join(",",[10, 11, 12, 13, 14,]));
var_dump(explode(" ", "Aufa Nur"));
var_dump(trim("    Aufa    nur   "));
var_dump(substr("Aufa nur", 0, 3));