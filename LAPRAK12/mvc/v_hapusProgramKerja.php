<?php  
include "koneksiMVC.php";  
$rs = $mysqli->query("DELETE FROM proker WHERE nomorProgram = '$_GET[nomorProgram]'");  
header("location:index.php");
