<?php

include "koneksi2.php";

$sql = "INSERT INTO user (username, password, level) VALUES (:userName, :passWord, :level)";

$statement = $pdo->prepare($sql);

$statement->bindValue(':userName', 'Mada');
$statement->bindValue(':passWord', 'ahay');
$statement->bindValue(':level', '1');

$inserted = $statement->execute();

if($inserted){
   echo 'Data pertama berhasil ditambahkan!<br>';
}

$statement->bindValue(':userName', 'Hendra');
$statement->bindValue(':passWord', 'yuhuu');
$statement->bindValue(':level', '2');

$inserted = $statement->execute();

if($inserted){
   echo 'Data kedua berhasil ditambahkan!<br>';
}
