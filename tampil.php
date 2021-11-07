<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>Tambah data</a><br>";

    $sql = "SELECT * FROM buku"; 
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "Judul : " . $baris[1] . "<br>";
        echo "Penulis : " . $baris[2] . "<br>";
        echo "Jenis : " . $baris[3] . "<br>";
        echo "Gambar : " . $baris[4] . "<br>";
        echo "<a href='ubah_data.php?buku=$baris[0]'>Ubah &nbsp</a>";
        echo "<a href='hapus.php?buku=$baris[1]'>Hapus</a>";
        $a++;
    }
    $conn->close();
?>