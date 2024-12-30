<?php
$host = 'sql103.byethost33.com';
$user = 'b33_37945169';
$password = '2030sukses';
$database = 'b33_37945169_manajemen';

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
