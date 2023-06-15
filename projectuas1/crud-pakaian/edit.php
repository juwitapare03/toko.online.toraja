<a href="read.php">KEMBALI</a>
<br/>
<h3>EDIT DATA PRODUK</h3>
<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pakaian where id = '$id'");
while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
            </tr>
</tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php
}
    ?>