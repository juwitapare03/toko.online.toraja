<!DOCTYPE html>
<html lang="en">
    <title>Tambahkan data produk</title>
   
    <body>
        <form action="create.php" method="POST">
            Nama
            <input type="text" name="nama" value=""><br>
            Harga
            <input type="text" name="harga" value=""><br>
            <input type="submit" name="simpan" value = "SIMPAN">
            </form>
            <?php
             if(isset($_POST['simpan'])){
                include ('../koneksi.php');
                $nama = $_POST['nama'];
                $harga = $_POST['harga'];
                $sql = mysqli_query($koneksi, "INSERT INTO pakaian(nama, harga)
                values ('$nama', '$harga')");
            }       
            ?>
</body>
</html>