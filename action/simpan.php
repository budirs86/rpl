<?php
// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../config/koneksi.php'; // pastikan path benar

    // Ambil data dari form
    $nama           = $_POST['nama'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];
    $alamat         = $_POST['alamat'];
    $nomor_telepon  = $_POST['nomor_telepon'];

    // Query simpan ke database
    $query = "INSERT INTO tbl_pendaftaran (nama_peserta_didik, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat_tinggal, nomor_telepon)
              VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$nomor_telepon')";

    if (mysqli_query($db, $query)) {
        // Redirect atau tampilkan pesan sukses
        header("Location: ../tbl_pendaftaran.php?pesan=sukses");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
