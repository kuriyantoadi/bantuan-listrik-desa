<?php
session_start();
if ($_SESSION['status'] != "admin-lisdes") {
    header("location:../login.php?pesan=belum_login");
    exit();
}

include '../koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$nama_staff_keluarahan = mysqli_real_escape_string($koneksi, $_POST['nama_staff_keluarahan']);
$id_kab_kota = mysqli_real_escape_string($koneksi, $_POST['id_kab_kota']);
$id_kecamatan = mysqli_real_escape_string($koneksi, $_POST['id_kecamatan']);
$id_desa = mysqli_real_escape_string($koneksi, $_POST['id_desa']);
$status_staff = mysqli_real_escape_string($koneksi, $_POST['status_staff']);

// Cek apakah username mengandung spasi
if (preg_match('/\s/', $username)) {
    header("Location: ../$session_user/staff_desa.php?pesan=username_invalid");
    exit();
}

// Insert data into the database
$query = "INSERT INTO tb_staff_desa (username, nama_staff_keluarahan, id_kab_kota, id_kecamatan, id_desa, status_staff) 
          VALUES ('$username', '$nama_staff_keluarahan', '$id_kab_kota', '$id_kecamatan', '$id_desa', '$status_staff')";

$cek_tambah = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($cek_tambah) {
    header("Location: ../$session_user/staff_desa.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
