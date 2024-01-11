<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <h1>Data Buku</h1>
    <center>
        <a href="create.php">
            <h3>Tambah Buku</h3>
        </a>
        <table border="1">
            <tr>
                <th>Judul</th>
                <th>Karya</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
            <?php
            
            include 'koneksi.php';

            $sql = "SELECT * FROM buku";

            $query = mysqli_query($koneksi, $sql);
            while($d = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>
                            <center><?php echo $d['judul']; ?></center>
                        </td>
                        <td><?php echo $d['karya']; ?></td>
                        <td><?php echo $d['penerbit']; ?></td>
                        <td><?php echo $d['tahun']; ?></td>
                        <td>
                            <a href="update.php?judul=<?php echo $d['judul'];?>">Edit</a>&nbsp;
                            <a href="delete.php?judul=<?php echo $d['judul'];?>">Hapus</a>
                        </td>
                    </tr>
            <?php
            } ?>
        </table>
    </center>
</body>
<script>
    alert("Selamat Datang!");
</script>
</html>