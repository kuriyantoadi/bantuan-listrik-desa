<?php
session_start();
if ($_SESSION['status'] != "admin-lisdes") {
    header("Location: ../login.php?pesan=belum_login");
    exit();
}

$session_user = $_SESSION['status'];

include '../koneksi.php';

// Ambil ID staff yang akan dihapus dari URL
$id_staff_desa = mysqli_real_escape_string($koneksi, $_GET['id_staff_desa']);

// Pastikan ID tidak kosong atau tidak valid
if (!empty($id_staff_desa)) {
    // Lakukan query untuk menghapus data staff berdasarkan ID
    $hapus_staff = mysqli_query($koneksi, "DELETE FROM tb_staff_desa WHERE id_staff_desa = '$id_staff_desa'");

    if ($hapus_staff) {
        // Jika berhasil dihapus
        header("Location: ../$session_user/staff-desa.php?pesan=hapus-berhasil");
    } else {
        // Jika gagal menghapus
        header("Location: ../$session_user/staff-desa.php?pesan=hapus-gagal");
    }
} else {
    // Jika ID tidak valid atau tidak ada
    header("Location: ../$session_user/staff-desa.php?pesan=id-tidak-valid");
}
?>
