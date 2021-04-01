<?php  
if(isset($_POST['username']) && isset($_POST['jabatan']) && isset($_POST['password'])){   
    session_start();   
    $_SESSION['username']=$_POST['username'];   
    $_SESSION['jabatan']=$_POST['jabatan'];   
    $_SESSION['password']=$_POST['password'];   
    if($_SESSION['username'] == 'reza' && $_SESSION['jabatan'] == 'ketua departemen' && $_SESSION['password'] == 'reza'){    
        header("Location:index.php");   
        } 
    else if ($_SESSION['username'] == 'pulungan' && $_SESSION['jabatan'] == 'menteri' && $_SESSION['password'] == 'pulungan'){    
         header("Location:index2.php");   
        } 
    else {    
        echo "Username atau Password yang Anda masukkan salah 
        <br> <a href = login.php>Coba kembali</a>";   
    }  
}
