<?php
    include './koneksi.php';
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "UPDATE buku SET judul_buku='$judul_buku', penulis='$penulis', jenis_buku='$jenis_buku', gambar_buku='$gambar_buku' WHERE id='$id'";
    if($conn->query($sql) ===  TRUE){
        echo "ubah data berhasil";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>