<form action="simpan.php" method="post">
    <table>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul_buku"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><input type="text" name="jenis_buku"></td>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar_buku"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="SIMPAN">
</form>