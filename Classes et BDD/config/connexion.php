<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "antoinecormier_pooj1";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "antoinecormier";
$password = "52ca4b4148c7bf06f35e89032a52940f";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

