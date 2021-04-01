<?php    
include "koneksiMVC.php";   

$rs = $mysqli->query("SELECT * FROM proker"); 
?> 

<html> 
<head>
</head> 
<body> 
    <form action = "login.php" method = "post">       
        <input type = "submit" name = "logout" value = "Login" style="color:green">     
    </form> 
    <br>
    <h2>Daftar Program Kerja BEM</h2>   
    <table border="1" cellpadding="5" cellspacing="0">     
        <tbody align="center" style="bacground-color: green">     
            <tr> <b>     
                <td>No</td>       
                <td>Nama Proker</td>
                <td>Surat Keterangan</td>
                <td colspan="2">Edit/Hapus</td>
                </b>    
            </tr>   
        </tbody> 
        <?php   
            while ($proker = mysqli_fetch_array($rs))   
            echo "
            <tr>
            <td>$proker[nomorProgram]</td>       
            <td>$proker[namaProgram]</td> 
            <td>$proker[suratKeterangan]</td>
            <td><a href =\"v_editProgramKerja.php?nomorProgram=$proker[nomorProgram]&e=1\"> Edit</a>       
            <td><a href =\"v_hapusProgramKerja.php?nomorProgram=$proker[nomorProgram]\"> Hapus</a></td>     
            </td>"
        ?> 
    </table><br><br>
    <form action = "v_editProgramKerja.php" method = "POST">
    <input type = "Submit" name = "tambah" value = "Tambah Program Kerja" style="color:green">
    </form>  
</body> 
</html>
