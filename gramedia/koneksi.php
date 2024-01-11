<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "gramedia";

$koneksi = mysqli_connect($host, $username, $password, $db);
if(!$koneksi) {
    echo "Gagal koneksi!";
} else {
    echo "Koneksi Berhasil!";
}
?>