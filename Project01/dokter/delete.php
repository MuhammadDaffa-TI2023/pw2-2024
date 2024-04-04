<?php
require '../dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data periksa yang terkait dengan dokter yang akan dihapus
    $sqlDeletePeriksa = "DELETE FROM periksa WHERE dokter_id = ?";
    $stmtDeletePeriksa = $dbh->prepare($sqlDeletePeriksa);
    $stmtDeletePeriksa->execute([$id]);

    // Hapus data dokter setelah menghapus data periksa yang terkait
    $sqlDeleteDokter = "DELETE FROM dokter WHERE id = ?";
    $stmtDeleteDokter = $dbh->prepare($sqlDeleteDokter);
    $stmtDeleteDokter->execute([$id]);

    // Redirect ke halaman index.php setelah proses penghapusan selesai
    header("Location: index.php");
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
