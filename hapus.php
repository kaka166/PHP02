<?php
     include './koneksi.php';
     $buku = $_GET['buku'];
     $sql = "DELETE FROM buku WHERE id='$id'";
     
     if ($conn->query($sql) === TRUE){
         echo "buku berhasil dihapus<br>";
         echo "<a href='tampil.php'>Kembali</a><br>";
     } else{
         echo "Error: " . $sql . "<br>" . $conn->error;
     }

     $conn->close();
?>