<?php
$str1 = 'Fakultas.Ilmu.Komputer.UB’';
$str2 = explode('.',$str1);
foreach ($str2 as $key => $value) {
  echo "'$value', ";
}
echo"</br></br>";
var_dump($str2);
?>
