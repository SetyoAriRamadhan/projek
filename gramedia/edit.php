<?php

include 'koneksi.php';

$judul = $_POST['judul'];
$karya = $_POST['karya'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

$sql = "UPDATE buku SET judul='$judul', karya='$karya', penerbit='$penerbit', tahun='$tahun' WHERE judul='$judul'";
$query = mysqli_query($koneksi,$sql);

if (!$query) {
    echo 'Gagal Edit Data';
} else {
    header('location:read.php');
}
?>