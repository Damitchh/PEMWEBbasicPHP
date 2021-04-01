<?php
$kode = [
    'Afghanistan' => 93,
    'Brazil' => 55,
    'Indonesia' => 62,
    'Malaysia' => 60,
    'Palestina' => 970
  ];

function cari($array, $cari) {
    if (in_array($cari, $array))
{
     return "true";
    
}
else{
  
    return "false";
}
  }
  echo 'MENCAR1 ANGKA 55 DARI ARRAY '.cari($kode,55).'<br>';
  echo 'MENCAR1 ANGKA 69 DARI ARRAY '.cari($kode,69);
