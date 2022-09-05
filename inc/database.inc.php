<?php
include_once("config.inc.php");
error_reporting(E_ALL);
ini_set("display_errors", true);

try{
    $pdo = new PDO("mysql:host=$dblogin1;dbname=$dblogin3", $dblogin4, $dblogin5);
} catch (PDOException $exception){
    exit('Verbindung fehlgeschlagen! ' . $exception->getMessage());
}
