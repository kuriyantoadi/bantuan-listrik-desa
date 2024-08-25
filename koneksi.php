<?php
$koneksi = mysqli_connect("localhost", "root", "", "bantuan_listrik_desa");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}