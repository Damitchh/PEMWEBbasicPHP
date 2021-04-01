<?php  
include "koneksiMVC.php"; 

if(empty($_GET['e']))   
    $title = "Tambah Program";  
else {   
    $e = $_GET['e'];   
    $title = "Edit Program";   
    $rs = $mysqli->query("SELECT * FROM proker WHERE nomorProgram = '$_GET[nomorProgram]'");   
    $data = mysqli_fetch_array($rs);  } 
    
    ?> 
 
<html> 
<head>  
<meta http-equiv="Content-Type" content="text/html; charset = utf-8"/>  
<title><?php echo $title?></title> 
</head> 
<body>  
    <h3><?php echo $title?></h3>  
    <form action = "v_insertProgramKerja.php" method = "POST">   
        <input type = "hidden" name = "e" value = "<?php if(isset($data)) echo $data['nomorProgram'];?>"/>   
        <table border = "1" cellpadding="5" cellspacing="0" height="150px" width="350px" >    
            <tr> 
                <td>Nomor</td>     
                <td><input type = "text" name = "nomorProgram" value = "<?php if (isset($data['nomorProgram'])) echo $data['nomorProgram'];?>"/></td>    
            </tr>    
            <tr>     
                <td>Nama Program</td>     
                <td><input type = "text" autocomplete="off" name = "namaProgram" value = "<?php if(isset($data)) echo $data['namaProgram']?>"/> </td>    
            </tr>    
            <tr>     
                <td>Surat Keterangan</td>     
                <td><input type = "text" autocomplete = "off" name = "suratKeterangan" value = "<?php if (isset($data)) echo $data['suratKeterangan'] ?>"/></td>
            </tr>
        </table> <br>   
        <input type = "submit" name = "submit" value = "Submit"/>  
    </form> 
</body> 
</html>
