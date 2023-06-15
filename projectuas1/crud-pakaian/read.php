<h2>Tampilkan Data</h2>
    <br/>
    <a href="create.php">+ TAMBAH DATA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Harga</th>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $data  = mysqli_query($koneksi, "SELECT * FROM pakaian");
    while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['harga']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
             </td>
    </tr>
    <?php
    }
    ?>
    </table>