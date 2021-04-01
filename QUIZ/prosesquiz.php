<?php

$skor = 0;
if (isset($_POST['formsoal'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    echo "Nama : $nama.</br>";
    echo "Nim : $nim";
    
    $NO1 = $_POST['NO1'];

    if($NO1 = "a"){
        $skor+=10;
        echo $skor;
    }
   

}
