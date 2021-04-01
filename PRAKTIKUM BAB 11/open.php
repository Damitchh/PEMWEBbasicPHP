<?php

include "database.php";

$sql = "SELECT * FROM user";
$query = mysqli_query($link,$sql);

while ($hasil = mysqli_fetch_array($query)){
    echo "username : ".$hasil['username']."<br>";
    echo "password : ".$hasil['password']."<br>";
    echo "level : ".$hasil['level']."<br>";
}
