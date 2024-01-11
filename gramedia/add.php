<?php

include 'koneksi.php';

$judul = $_POST['judul'];
$karya = $_POST['karya'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

echo $judul." ".$karya." ".$penerbit." ".$tahun;

$sql = "INSERT INTO buku VALUES('$judul','$karya','$penerbit','$tahun')";
$query = mysqli_query($koneksi, $sql);

if (!$query) {
    echo 'Gagal Menambah Data';
} else {
    header('location:read.php');
}
?>