<!-- edit.php: Mengedit data anggota (update) -->

<?php
include 'config.php';

$id = $_GET['id'];
$query = "SELECT * FROM anggota WHERE id_anggota = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $email = $_POST['email'];
    $ttl = $_POST['TTL'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $query = "UPDATE anggota SET nama = '$nama', NIS = '$nis', email = '$email', TTL = '$ttl', tanggal_lahir = '$tanggal_lahir' WHERE id_anggota = $id";
    mysqli_query($conn, $query);

    header('Location: index2.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Edit Anggota</title>
</head>
<body>
    <div class="top-bar">
        <div class="logo"> <img src="logo perpus.png">
            <div class="nama">E - Perpus</div></div>
    </div>
    <div class="container">
        <div class="sidebar">
            <div class="user">
                <img src="pp.webp" alt="User Image" class="avatar">
                <div class="username">
                    <p>Anonoymous</p>
                    <p class="status">Administrator</p>
                </div>
            </div>
            <div class="comment">
                <p>MAIN NAVIGATION</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-database"></i> Kelola Data</a></li>
                    <li><a href="#"><i class="fas fa-file-alt"></i> Log Data</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> Laporan</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Setting</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </nav>
        </div>

        <div class="card">
            <h1>Edit Anggota</h1>
        <form method="post">
            <label>Nama Anggota :</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
            <label>NIS (Nomor Induk Siswa) :</label>
                <input type="text" name="nis" value="<?php echo $data['NIS']; ?>" required>
            <label>Email :</label>
                <input type="email" name="email" value="<?php echo $data['email']; ?>" required>
            <label>Tempat :</label>
                <input type="text" name="TTL" value="<?php echo $data['TTL']; ?>" required>
            <label>Tanggal Lahir :</label>
                <input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required>
                <div class="btn-container">
                <a href="index2.php">
                    <button class="btn-back">Kembali</button></a>
                    <button type="submit" class="btn-save">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>