<?php
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $agama          = $_POST['agama'];
    $alamat         = $_POST['alamat'];
    $nomor_telepon  = $_POST['nomor_telepon'];

    $query = "UPDATE tbl_pendaftaran SET 
              nama_peserta_didik='$nama', 
              tempat_lahir='$tempat_lahir', 
              tanggal_lahir='$tanggal_lahir',
              jenis_kelamin='$jenis_kelamin',
              agama='$agama',
              alamat_tinggal='$alamat',
              nomor_telepon='$nomor_telepon'
              WHERE id=$id";

    if (mysqli_query($db, $query)) {
        header("Location: ../tbl_pendaftaran.php?pesan=update_sukses");
        exit();
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
