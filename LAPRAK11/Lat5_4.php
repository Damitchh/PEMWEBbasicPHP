<?php
  //ganti mySQLUserName dengan username dari server mySQL Anda
  //ganti mySQLPassWord dengan password dari server mySQL Anda
  $username = $_POST['username'];
  $password =$_POST['password'];
  echo $username.' '.$password;
  $mysqli = new mysqli('damitch.id', 'root', 'damitch', 'pemweb');
  $rs = $mysqli->query("CALL SP_Login ('".$username."','".$password."')" );
  $row = $rs->fetch_object();

  if ($row) {
    header("location: Lat5_1.php");
  } else {
    echo "Data tidak terdaftar";

    //nama file form login yang dibuat di Latihan 4
    header('Location: formLogin.html');
  }
