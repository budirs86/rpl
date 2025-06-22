<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Koneksi ke database
    include '../config/koneksi.php';

    // Eksekusi query hapus
    $query = "DELETE FROM tbl_pendaftaran WHERE id = $id";
    if (mysqli_query($db, $query)) {
        header("Location: ../tbl_pendaftaran.php?pesan=sukses");
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
