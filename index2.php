<!-- index.php: Menampilkan data anggota (view) dan pencarian -->

<?php
include 'config.php';

// Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT * FROM anggota WHERE nama LIKE '%$search%' OR NIS LIKE '%$search%'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Perpustakaan</title>
    <link rel="stylesheet" href="stylesss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="logo perpus.png" type="image/png">
</head>
<body>
    <div class="top-bar">
        <div class="logo"> <img src="logo perpus.png">
            <div class="nama">E - Perpus</div>
        </div>
    </div>
    <div class="container">
        <div class="sidebar">
            <div class="user">
                <img src="pp.webp" alt="User Image" class="avatar">
                <div class="username">
                    <p>Anonymous</p>
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

    <div class="main-content">
            <h1 style="font-size: 28px;">Daftar Anggota Perpustakaan</h1>
        <div class="search-container">
            <form method="get">
                <input type="text" name="search" placeholder="Cari nama atau NIS..." value="<?php echo $search; ?>">
                <button type="submit">Cari</button>
            </form>
            <a href="tambah.php" class="tambah-anggota">Tambah Anggota</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Email</th>
                    <th>Tempat</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id_anggota']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['NIS']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['TTL']; ?></td>
                        <td><?php echo $row['tanggal_lahir']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id_anggota']; ?>" class="btn-edit">Edit</a>
                            <a href="hapus.php?id=<?php echo $row['id_anggota']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
    </div>
</body>
</html>


