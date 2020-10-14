<?php
define("DSN", "mysql:host=localhost;dbname=revision");
define("USER", "root");
define("PASS", "root");

$pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if($pdo === false){
    echo $pdo->error_log();
} else {
    echo 'Connection sql OK';
}