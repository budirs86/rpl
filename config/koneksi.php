<?php

// inisialisasi variabel 
$server = 'localhost';
$user = 'root';
$password = 'root';
$nama_database = 'rpl_siswa';

// fungsi menghubungkan ke database
$db = mysqli_connect($server, $user, $password, $nama_database);

// fungsi pengkondisian database
if (!$db) {

    // jika tidak terhubung 
    die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}

?>