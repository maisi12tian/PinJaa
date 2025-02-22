<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinJaa Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f5f5f5;
            color: #333;
        }
        .sidebar {
            width: 250px;
            background: #f3f3f3;
            padding: 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .sidebar h2 {
            color: #ff6600;
            font-size: 24px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 15px 0;
        }
        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .content {
            flex: 1;
            padding: 30px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
        }
        .profile-button {
            background: #e0e0e0;
            padding: 10px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }
        .dashboard-box {
            background: #e0e0e0;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        .stats {
            display: flex;
            gap: 20px;
        }
        .stat-card {
            flex: 1;
            background: #e0e0e0;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>PinJaa</h2>
        <ul>
            <li><a href="#">🏠 Beranda</a></li>
            <li><a href="#">📦 Daftar Barang</a></li>
            <li><a href="#">📄 Peminjaman</a></li>
            <li><a href="#">👤 Profil Pengguna</a></li>
            <li><a href="#">⚙ Pengaturan</a></li>
            <li><a href="#">🚪 Keluar</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            <input type="text" placeholder="Telusuri" class="search-bar">
            <div class="profile-button">🔵 Bagas A.</div>
        </div>
        <div class="dashboard-box">
            <h3>Hi, Bagas Alif 👋</h3>
            <p>Mau pinjam apa hari ini?</p>
        </div>
        <div class="stats">
            <div class="stat-card">Rekomendasi</div>
            <div class="stat-card">Yang Kamu Pinjam</div>
        </div>
    </div>
</body>
</html>