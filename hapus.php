<!-- hapus.php: Menghapus data buku (delete) -->

<?php
include 'config.php';

$id = $_GET['id'];
$query = "DELETE FROM anggota WHERE id_anggota = $id";
mysqli_query($conn, $query);

header('Location: index2.php');
?>
