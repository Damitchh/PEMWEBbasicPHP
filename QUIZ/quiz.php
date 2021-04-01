<!DOCTYPE html>
<!DOCTYPE HTML>
<html>

<head>
    <title>Penggunaan TAG Heading HTML</title>
    <h1>KUSI PEMROGRAMAN WEB</h1>
    <h2>MUHAMMAD REZA UTAMA PULUNGAN</h2>
    <br>
</head>

<body>
    <form action="prosesquiz.php" method="post" name="formsoal">
            Nama: <input type="text" name="nama" required><br>
            Nim: <input type="text" name="nim" required>



            <h2>1. Apa fungsi atribut “action” pada tag?</h2>
            <input type="radio" name="NO1" value="a">Sebagai pembeda dengan form lain
            </br>
            <input type="radio" name="NO1" value="b">Mengatur ukuran form
            </br>
            <input type="radio" name="NO1" value="c">Alamat tujuan submit data</br>
            <input type="radio" name="NO1" value="d">Mengatur method yang digunakan</br>
        

        
            <h2>2. Berikut ini yang merupakan bukan dari perintah dasar session adalah</h2>
            <input type="radio" name="NO2" value="a">Session_start()
            </br>
            <input type="radio" name="NO2" value="b">Session_unset()</br>
            <input type="radio" name="NO2" value="c">Session_get()
            </br>
            <input type="radio" name="NO2" value="d">Session_destroy
            </br>

        
            <h2>3. Berikut ini merupakan operasi dari php <br>
                1. Fopen() <br>
                2. Opendir() <br>
                3. Readdir() <br>
                4. Closedir() <br>
                5. Handle_dir() <br>
                Manakah yang merupakan operasi dari file direktori
            </h2>
            <input type="radio" name="NO3" value="a">1-2-3</br>
            <input type="radio" name="NO3" value="b">1-2-3-4</br>
            <input type="radio" name="NO3" value="c">2-3-4</br>
            <input type="radio" name="NO3" value="d">5-3-4</br>
            <input type="radio" name="NO3" value="d">4-2-1</br>

        
            <h2>4. Jika nilai dari atribut action kosong<form action=””>,kemana data akan disubmit ?</h2>
            <input type="radio" name="NO4" value="a">Ke halaman sebelumnya</br>
            <input type="radio" name="NO4" value="b">Ke halaman sesudahnya</br>
            <input type="radio" name="NO4" value="c">Ke halaman itu sendiri</br>
            <input type="radio" name="NO4" value="d">Data tidak tersubmit kemanapun</br>

        
            <h2>5.Fungsi ‘require’ merupakan salah satu fungsi php untuk mereferensi / memuat class
                dalam file php yang lain. Jika file yang dituju / direferensi tidak ada maka ?</h2>
            <input type="radio" name="NO5" value="a">Program menampilkan halaman kosong.</br>
            <input type="radio" name="NO5" value="b">Program akan terus dijalankan.</br>
            <input type="radio" name="NO5" value="c">Program akan berhenti.</br>
            <input type="radio" name="NO5" value="d">Program akan menampilkan warning.</br>

       
            <h2>6. File yang diunggah ke server melalui sebuah form dapat diakses melalui array
                superglobal PHP dengan nama ?
            </h2>
            <input type="radio" name="NO6" value="a">$_UPLOAD</br>
            <input type="radio" name="NO6" value="b">$_FILES</br>
            <input type="radio" name="NO6" value="c">$_MEDIA</br>
            <input type="radio" name="NO6" value="d">$_DATA</br>

        
            <h2>7. Perintah pada PHP fopen("namafile.txt”, “a+”); berguna untuk melakukan</h2>
            <input type="radio" name="NO7" value="a">Membaca dan menulis pada awal file</br>
            <input type="radio" name="NO7" value="b">Membaca dan menulis pada akhir file</br>
            <input type="radio" name="NO7" value="c">Membaca pada awal file</br>
            <input type="radio" name="NO7" value="d">Menulis pada awal file</br>
            <input type="radio" name="NO7" value="e">Semua salah</br>

        
            <h2>8. Perintah TRUNCATE pada SQL digunakan untuk ?</h2>
            <input type="radio" name="NO8" value="a">Memberikan akses ke dalam basis data</br>
            <input type="radio" name="NO8" value="b">Memastikan data tersimpan dalam database</br>
            <input type="radio" name="NO8" value="c">Menghapus semua data beserta memori yang digunakan</br>
            <input type="radio" name="NO8" value="d">Mengubah struktur dari objek basis data</br>

        
            <h2>9. Fungsi PHP yang digunakan untuk membaca isi dari sebuah file teks hingga paling
                banyak sejumlah satu baris saja adalah ?</h2>
            <input type="radio" name="NO9" value="a">fread()</br>
            <input type="radio" name="NO9" value="b">fgets()</br>
            <input type="radio" name="NO9" value="c">fline()</br>
            <input type="radio" name="NO9" value="d">feof()</br>

        
            <h2>10. Bagaimana cara untuk mengtahui ukuran sebuah file dalam satuan Mega Bytes
                (MB)?</h2>
            <input type="radio" name="NO10" value="a">filesize($file) / 1024;</br>
            <input type="radio" name="NO10" value="b">filesize($file) / (1024*1024);</br>
            <input type="radio" name="NO10" value="c">filesize($file);</br>
            <input type="radio" name="NO10" value="d">filesize($file, MEGABYTES);</br>

            <input type="submit" name="formsoal" value="SEND!">
    
    </form>

    
</body>

</html>