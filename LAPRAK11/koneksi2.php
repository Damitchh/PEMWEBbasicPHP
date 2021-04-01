<?php

$host = 'damitch.id';
$user = 'root';
$pass = 'damitch';
$database = 'pemweb';
 
$options = array(
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_EMULATE_PREPARES => false
);
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);
