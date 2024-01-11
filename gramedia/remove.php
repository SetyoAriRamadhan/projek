<<?php

include 'koneksi.php';

$judul = $_POST['judul'];
echo $judul;

$sql = "DELETE FROM buku WHERE judul='$judul'";
$query = mysqli_query($koneksi,$sql);

if (!$query) {
    echo 'Gagal Hapus Data';
} else {
    header('location:read.php');
}
?>