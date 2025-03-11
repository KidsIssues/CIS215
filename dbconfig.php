<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function connectDB(){
    $database = "lboardma";
    $user = "lboardma";
    $pass = "earlobe";
    $host = "localhost";
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        }    # You’ll need to take this echo out when you know it’s working
    catch (PDOException $e) {echo $e;}
    return $db; } ?>
