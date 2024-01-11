<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <center>
        <h1>Hapus Buku</h1>
        <h3>Apakah anda yakin akan menghapus data ini?</h3>

        <?php
        
        include 'koneksi.php';

        $judul = $_GET['judul'];
        $sql = "SELECT * FROM buku WHERE judul='$judul'";
        $query = mysqli_query($koneksi, $sql);

        while ($d = mysqli_fetch_array($query)) {
            ?>
                <form action="remove.php" method="post">
                    <input type="hidden" name="judul" value="<?php echo $d['judul'];?>">
                    Judul : <?php echo $d['judul']?><br><br>
                    Judul : <?php echo $d['karya']?><br><br>
                    Judul : <?php echo $d['penerbit']?><br><br>
                    Judul : <?php echo $d['tahun']?><br><br>
                    <input type="submit" value="kirim">
                </form>
            <?php } ?>
    </center>
</body>
</html>