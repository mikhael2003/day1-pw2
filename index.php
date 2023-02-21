<?php
    // ini adalah perintah untuk mencetak pesan ke layar 
    echo "<h1>Biodata Saya</h1>";
    
    /* 
    - ini adalah contoh deklarasi variable dengan tipe data.
    - teks, bilngan bulat, bilangan desimanl, desimal, boleean.
    - nama variable diawali dengan huruf atau garis bawah.
    - nama variable hanya boleh ditulis dengan huruf atau garis bawah
    a-z, A-Z, 0-9, dan garis bawah (_)
    - nama variable yang lebih dari satu kata dapat dipisahkan dengan garis bawah. contoh : jenis_kelamin, gol_darah, ....
    */


    $npm = "2125250075";
    $nama = "Mikhael Anrodin Simanjuntak";
    $jk = "Laki-laki";
    $usia = "18";
    $tinggi = "168,5";

    echo "<ol>";
    echo "<li>";
    echo "NPM :".$npm;echo "</li>";
    
    echo "<li>"; 
    echo "Nama :".$nama; echo "</li>";
   
    echo "<li>";
    echo "Jenis Kelamin :".$jk;echo "</li>";
    
    echo "<li>";
    echo "Usia :".$usia; echo "</li>";
   
    echo "<li>";
    echo "Tinggi :".$tinggi;  echo "</li>";
  
    echo "</ol>";


    $kode_prodi = substr($npm, 4, 2);
    $prodi = "Informatika";
    if($kode_prodi == "25") {// kode npm = 25
        $prodi = "Informatika";
    }else if($kode_prodi == "24") {// kode npm = 24
        $prodi = "Sistem Informasi";
    }else if($kode_prodi == "27") {// kode npm = 27
        $prodi = "Teknik Elektro";
    }else if($kode_prodi == "20") {// kode npm = 20
        $prodi = "Manejemen";
    }else if($kode_prodi == "21") {// kode npm = 21
        $prodi = "Akuntansi";
    } 

    echo "Prodi :".$prodi;
    

?>