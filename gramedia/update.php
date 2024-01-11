<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <center>
        <h1>Edit</h1>
        <?php 
        
        include 'koneksi.php';

        $judul = $_GET['judul'];
        $sql = "SELECT * FROM buku WHERE judul='$judul'";
        $query = mysqli_query($koneksi, $sql);
        while ($d = mysqli_fetch_array($query)) {
            ?>
                <form action="edit.php" method="post">
                    Judul : <input type="text" name="nama" value="<?php echo $d['judul'];?>"><br><br>
                    Karya : <input type="text" name="nama" value="<?php echo $d['karya'];?>"><br><br>
                    Penerbit : <input type="text" name="nama" value="<?php echo $d['penerbit'];?>"><br><br>
                    Tahun : <input type="text" name="nama" value="<?php echo $d['tahun'];?>"><br><br>
                    <input type="submit" value="kirim">
                </form>
            <?php } ?>
    </center>
</body>
</html>