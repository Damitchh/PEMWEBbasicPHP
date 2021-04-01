<?php 
 
include_once ("m_programKerja.php"); 
 
class c_programKerja {    
    public $model; 
    public function __construct(){      
        $this->model = new m_programKerja();      
    } 

    public function invoke() {      
        $program = $this->model->getSemuaPogramKerja();      
        include 'v_programKerja.php';   
    } 

    public function invoke2() {      
        $program = $this->model->getSemuaPogramKerja();      
        include 'prokerMenteri.php';   } 

    public function tambah($nomorProgram, $namaProgram, $suratKeterangan){    
        $this->model = new m_programKerja();    
        $nomorProg = $nomorProgram;    
        $namaProg = $namaProgram;    
        $suratKet = $suratKeterangan;    
        $tambah = $this->model>setProgramKerja($nomorProg,$namaProg,$suratKet);   
    }
 
}
