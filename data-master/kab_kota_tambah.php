<?php
session_start();
if ($_SESSION['status'] != "admin-lisdes") {
    header("location:../login.php?pesan=belum_login");
}

$session_user = $_SESSION['status'];

include '../koneksi.php';

// Get POST data and sanitize inputs
$nama_kab_kota = mysqli_real_escape_string($koneksi, $_POST['nama_kab_kota']);

// Insert data into the database
$query = "INSERT INTO tb_kab_kota (nama_kab_kota) 
          VALUES ('$nama_kab_kota')";

$cek_tambah = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($cek_tambah) {
    header("Location: ../$session_user/kab_kota.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
