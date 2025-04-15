<?php
include "header.php";
include "navbar.php";
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    body {
        background: linear-gradient(to right, #2c3e50, #4ca1af);
        min-height: 100vh;
        font-family: 'Segoe UI', sans-serif;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        color: #fff;
        transition: all 0.3s ease;
    }

    .glass-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
    }

    .card-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #ffffff;
        text-shadow: 0 0 10px rgba(0, 123, 255, 0.7);
    }

    .glass-card h5 {
        font-weight: 600;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .glass-card h3 {
        font-size: 2.2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .btn-glass {
        border: 1px solid #fff;
        color: #fff;
        backdrop-filter: blur(4px);
        transition: background 0.3s ease, color 0.3s ease;
    }

    .btn-glass:hover {
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
    }

    .welcome-card {
        background: rgba(255, 255, 255, 0.08);
        padding: 30px;
        border-radius: 20px;
        color: #fff;
        margin-top: 30px;
        text-align: center;
    }

    .welcome-card h4 {
        font-weight: bold;
    }

    .welcome-card p {
        margin-top: 10px;
        font-size: 1.1rem;
    }
</style>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="glass-card p-4 text-center">
                <i class="bi bi-box-seam card-icon"></i>
                <h5>Data Barang</h5>
                <?php
                include '../koneksi.php';
                $data_produk = mysqli_query($koneksi, "SELECT * FROM produk");
                $jumlah_produk = mysqli_num_rows($data_produk);
                ?>
                <h3><?= $jumlah_produk; ?></h3>
                <a href="data_barang.php" class="btn btn-glass btn-sm mt-2">Lihat Detail</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="glass-card p-4 text-center">
                <i class="bi bi-cart-check card-icon"></i>
                <h5>Data Pembelian</h5>
                <?php
                $data_penjualan = mysqli_query($koneksi, "SELECT * FROM penjualan");
                $jumlah_penjualan = mysqli_num_rows($data_penjualan);
                ?>
                <h3><?= $jumlah_penjualan; ?></h3>
                <a href="pembelian.php" class="btn btn-glass btn-sm mt-2">Lihat Detail</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="glass-card p-4 text-center">
                <i class="bi bi-people-fill card-icon"></i>
                <h5>Data Pengguna</h5>
                <?php
                $data_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
                $jumlah_petugas = mysqli_num_rows($data_petugas);
                ?>
                <h3><?= $jumlah_petugas; ?></h3>
                <a href="data_pengguna.php" class="btn btn-glass btn-sm mt-2">Lihat Detail</a>
            </div>
        </div>
    </div>

    <div class="welcome-card">
        <h4>Selamat Datang, Administrator 👋</h4>
        <p>Silakan akses fitur-fitur manajemen barang, pembelian, dan pengguna melalui dashboard ini.</p>
    </div>
</div>

<?php
include "footer.php";
?>
