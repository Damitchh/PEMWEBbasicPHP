<?php 
 $nilai= $_POST["nilai"];
  function factorial($nilai){
    $nilai = $_POST["nilai"];
    $nama= "Muhammad Reza Utama Pulungan";
    $nim=" 185150700111009";
    echo "Nilai dari $nilai! adalah </br><br> ";
    $faktorial = 1;
    if($nilai >= 1){
      for($i=1; $i <= $nilai; $i++){  
           echo $i ." x ";    
           $faktorial *= $i;
         }
    echo " = $faktorial </br></br>";}
    else {
        $faktorial = 1;
    } 
    $array1= array("nilai"=>$nilai, "hasil faktorisasi"=>$faktorial,"nim"=>$nim,"nama"=> $nama);
        return  $array1;
    }
    session_start();

   $_SESSION["array1"] = factorial($nilai);
    echo'
    <form action="/Lat3_3c.php">
    <button type="submit">Next</button>
    </form>';
?>
