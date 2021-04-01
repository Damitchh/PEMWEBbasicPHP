<?php
$username = $_POST['id'];
$password = $_POST['pass'];

if($username=='admin' && $password =='123'){
    echo "berhasil";
}
else{
    echo "gagal";
}
?>