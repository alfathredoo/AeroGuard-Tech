<?php 
    
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Bird Strike Runway - Bandara Internasional Juanda Surabaya</title>
    <link rel="stylesheet" href="./css/index.css">
    <!-- FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Header / Navbar -->
    <header class="site-header">
        <div class="header-left">
            <a href="#" class="logo">
                <i class="fa-solid fa-plane-up"></i> 
                <span>Bandara Juanda | Bird Strike Monitoring</span>
            </a>
        </div>
        <div class="header-right">
            <nav>
                <ul class="nav-menu">
                    <li><a href="#" class="active">Beranda</a></li>
                    <li><a href="#">Runway 10/28</a></li>
                    <li><a href="#">Mitigasi & Habitat</a></li>
                    <li><a href="#">Laporan</a></li>
                </ul>
            </nav>
            <div class="user-profile">
                <img src="https://via.placeholder.com/40" alt="Foto Profil Admin">
                <span>Airport Tech Juanda</span>
            </div>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="main-content">
        <!-- Bagian Judul -->
        <section class="page-title">
            <h1>Dashboard Hazard & Bird Strike - Bandar Udara Internasional Juanda</h1>
            <p>Sistem Pemantauan Gangguan Fauna dan Manajemen Keselamatan Runway (SUB)</p>
        </section>

        <!-- Kartu Statistik Utama -->
        <section class="stats-cards">
            <div class="card">
                <div class="card-icon bg-blue"><i class="fa-solid fa-triangle-exclamation"></i></div>
                <div class="card-info">
                    <h3>Total Insiden (YTD 2026)</h3>
                    <p class="number">12</p>
                    <span class="trend text-down"><i class="fa-solid fa-arrow-down"></i> 8% dari tahun lalu</span>
                </div>
            </div>
            <div class="card">
                <div class="card-icon bg-orange"><i class="fa-solid fa-location-crosshairs"></i></div>
                <div class="card-info">
                    <h3>Fokus Area Rawan</h3>
                    <p class="number">Runway 10</p>
                    <span class="sub-text">Sektor Timur (Sidoarjo)</span>
                </div>
            </div>
            <div class="card">
                <div class="card-icon bg-green"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="card-info">
                    <h3>Indeks Keamanan Runway</h3>
                    <p class="number">99.1%</p>
                    <span class="trend text-up"><i class="fa-solid fa-arrow-up"></i> Terkendali</span>
                </div>
            </div>
        </section>

        <!-- Bagian Grafik & Analisis Cepat -->
        <section class="dashboard-grid">
            <div class="panel chart-panel">
                <div class="panel-header">
                    <h2>Statistik Bulanan Insiden Runway Juanda</h2>
                    <select class="filter-select">
                        <option>Tahun 2026</option>
                        <option>Tahun 2025</option>
                    </select>
                </div>
                <div class="chart-placeholder">
                    <!-- Simulasi Grafik Batang -->
                    <div class="bar-chart">
                        <div class="bar" style="height: 30%;" data-month="Jan" data-val="2"></div>
                        <div class="bar" style="height: 50%;" data-month="Feb" data-val="4"></div>
                        <div class="bar" style="height: 20%;" data-month="Mar" data-val="1"></div>
                        <div class="bar" style="height: 40%;" data-month="Apr" data-val="3"></div>
                        <div class="bar" style="height: 30%;" data-month="Mei" data-val="2"></div>
                        <div class="bar" style="height: 10%;" data-month="Jun" data-val="0"></div>
                    </div>
                </div>
            </div>

            <div class="panel summary-panel">
                <div class="panel-header">
                    <h2>Spesies Burung Dominan (Juanda)</h2>
                </div>
                <ul class="species-list">
                    <li>
                        <span class="species-name">Kuntul Sawah (Egret)</span>
                        <span class="species-percentage">50%</span>
                    </li>
                    <li>
                        <span class="species-name">Burung Penceroboh Tambak</span>
                        <span class="species-percentage">25%</span>
                    </li>
                    <li>
                        <span class="species-name">Layang-layang (Swallow)</span>
                        <span class="species-percentage">15%</span>
                    </li>
                    <li>
                        <span class="species-name">Lainnya</span>
                        <span class="species-percentage">10%</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Tabel Laporan Insiden Terbaru -->
        <section class="table-section">
            <div class="panel">
                <div class="panel-header">
                    <h2>Log Laporan Insiden Runway Juanda (SUB)</h2>
                    <a href="#" class="view-all">Lihat Arsip Lengkap</a>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID Laporan</th>
                                <th>Waktu (WIB)</th>
                                <th>Runway</th>
                                <th>Jenis Burung</th>
                                <th>Dampak / PIC</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#SUB-BS-018</td>
                                <td>18 Jun 2026 - 09:15</td>
                                <td>Runway 10</td>
                                <td>Kuntul Sawah</td>
                                <td>Tidak ada kerusakan / Airport Tech</td>
                                <td><span class="badge resolved">Selesai Ditangani</span></td>
                            </tr>
                            <tr>
                                <td>#SUB-BS-017</td>
                                <td>02 Jun 2026 - 14:40</td>
                                <td>Runway 28</td>
                                <td>Burung Tambak</td>
                                <td>Pengecekan mesin / AOA</td>
                                <td><span class="badge resolved">Selesai Ditangani</span></td>
                            </tr>
                            <tr>
                                <td>#SUB-BS-016</td>
                                <td>21 Mei 2026 - 06:20</td>
                                <td>Runway 10</td>
                                <td>Layang-layang</td>
                                <td>Inspeksi Awal / Safety Unit</td>
                                <td><span class="badge pending">Investigasi Lanjutan</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

</body>
</html>
