<?php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $db = "buku";

     $conn = new mysqli ($host, $user, $pass, $db);

     if($conn){
         echo "koneksi berhasil";
     }else{
         echo "koneksi gagal";
     }
?>