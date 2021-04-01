<?php
require "koneksiMVC.php";

class m_programKerja {
    private $nomorProgram;    
    private $namaProgram;   
    private $suratKeterangan;   
    public $hasil = array(); 
 
  public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan) {     
      include "koneksiMVC.php";   

      $this->nomorProgram = $nomorProgram;     
      $this->namaProgram = $namaProgram;     
      $this->suratKeterangan = $suratKeterangan;     
      $rs = $mysqli->query("INSERT INTO proker VALUES ('$this->nomorProgram', '$this->namaProgram', '$this->suratKeterangan')");   } 
 
  public function getSemuaPogramKerja() {     
      require "koneksiMVC.php";     
      $rs = $mysqli->query("SELECT * FROM proker");     
      $rows = array(); 
 
    while($row = $rs->fetch_assoc()){       
        $rows[] = $row;     } 
 
    $this->hasil = $rows;     
    return $this->hasil;   } }
