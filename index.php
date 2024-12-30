<?php
// Variabel PHP
$title = "Dashboard Administrator";
$username = "Anonymous";
$role = "Administrator";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="logo perpus.png" type="image/png">
</head>
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
            <h1><?php echo $title; ?></h1>
            <div class="user-info">
                <span class="role"><?php echo $role; ?></span>
            </div>

            <div class="card-container">
            <a href="#">
                    <div class="card blue">
                        <img src="buku.png" class="vektor">
                        <h2>Buku</h2>
                        <p>Semua buku, satu tempat</p>
                    </div>
                </a>

                <a href="index2.php">
                    <div class="card orange">
                        <img src="orang.png" class="vektor">
                        <h2>Anggota</h2>
                        <p>Daftar anggota</p>
                    </div>
                </a>
                
                <a href="#">
                    <div class="card red">
                        <img src="data.png" class="vektor">
                        <h2>Laporan</h2>
                        <p>Data lengkap, akses cepat</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
<?php