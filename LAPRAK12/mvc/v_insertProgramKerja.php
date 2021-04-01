<?php  
include "koneksiMVC.php";

$e = $_POST['e'];  
if (empty($e)){   
    $rs = $mysqli->query
    ("INSERT INTO proker VALUES ('".$_POST['nomorProgram']."','".$_POST['namaProgram']. "','".$_POST['suratKeterangan']."')");  
} 
else    
    $rs = $mysqli->query("UPDATE proker SET namaProgram = '$_POST[namaProgram]', suratKeterangan = '$_POST[suratKeterangan]' WHERE nomorProgram = '$_POST[nomorProgram]'");   

    header("location:index.php");
