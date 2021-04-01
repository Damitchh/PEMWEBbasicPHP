<?php
$host = 'damitch.id';
$dbusername = 'root';
$dbpassword = 'damitch';
$dbname = 'pemweb';
$mysqli = new mysqli($host,$dbusername,$dbpassword,$dbname);

if ($mysqli->connect_errno){
    die ('Database Connection failure');
}