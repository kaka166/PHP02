<?php
    include './koneksi.php';
    $buku = $_GET["buku"];

    $sql = "SELECT * FROM buku WHERE id=".$buku;
    $result = $conn->query($sql);

    $result= $result ->fetch_assoc();
?>

<form action="ubah.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul_buku" value="<?php echo $result['judul_buku']?>"></td>"
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis" value="<?php echo $result['penulis']?>"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><textarea name="jenis_buku"><?php echo $result['jenis_buku'];?></textarea></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar_buku" value="<?php echo $result['gambar_buku']?>"></td>
    </table>
    <input type="submit" name="simpan" value="UBAH">
</form>