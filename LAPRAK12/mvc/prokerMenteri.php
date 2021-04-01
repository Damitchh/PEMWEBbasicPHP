<?php
  include "koneksiMVC.php";   
  $rs = $mysqli->query("SELECT * FROM proker"); 
?> 
<html> 
<head>
</head> 
<body> 
    <h2>Daftar Program Kerja BEM</h2>   
    <table border="1" cellpadding="5" cellspacing="0">     
        ``<tbody>     
            <tr>      
                <th>No</th>       
                <th>Nama Proker</th>       
                <th>Surat Keterangan</th>     
                </tr>   
        </tbody> 
        <?php   
        while ($proker = mysqli_fetch_array($rs))   
        echo "<tr><td>$proker[nomorProgram]</td>       
        <td>$proker[namaProgram]</td>       
        <td>$proker[suratKeterangan]</td></tr>"
        ?> 
    </table> <br>
    <form action = "login.php" method = "post">       
        <input type = "submit" name = "logout" value = "Logout" style="color:green">     
        </form> </body> </html
