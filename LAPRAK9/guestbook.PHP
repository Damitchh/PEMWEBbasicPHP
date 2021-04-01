<?php
        echo '
        <form action="guestbook.php" method="get" enctype="multipart/form-data">
        Nama <input type="text" name="nama"> <br><br>
        Komentar <input type="text" name="comment">
        <input type="submit" name="submit" value="Submit">
        </form>
        ';
        if(isset($_GET['submit'])){
        $nama= $_GET['nama'];
        $comment = $_GET['comment'];
        $content = $nama.';'.$comment.';';
        $filename ='guestbook.txt';
        $file_handle = fopen($filename,'a+') or die("Can't open file");

        if (flock($file_handle,LOCK_EX)){
            if (!fwrite($file_handle,$content)){
                echo "tidak bisa ditambahkan ke $filename";
            }
            flock($file_handle, LOCK_UN);
        }
        $theData =file_get_contents($filename);
        fclose($file_handle);
        $str = explode(';',$theData);
        for ($i=0; $i < sizeof($str) ; $i++) { 
            echo "$str[$i]  ";
            if($i % 2 == 1 ) 
            echo "</br>";
        }
         }
    ?>
