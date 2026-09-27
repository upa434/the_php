<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "lib/Myfunction.php";
 echo sayHello("Aufa", "Nur");

 /*jika nama file yg diambil pada require yg diambil salah maka akan terjadi error 
 namun jika pada include nama file yg diambil salah akan tetap dilanjutkan namun ada peringatan
 untuk memastikan suatu file yg diload dilakukan sekali bisa tambahkan once,include_once dan require_once,dan pastikan melaukan include dan require diatas kode program jika dari bawah dan file yg di deklare ada diatas maka akan terjadi error
 */