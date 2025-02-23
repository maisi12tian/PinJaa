<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinJaa - laporan barang</title>
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
            background:rgb(209, 204, 204);
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
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background: #e0e0e0;
        }
        .action-btn {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
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
        <div class="table-container">
            <h2>Laporang barang</h2>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Waktu</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>HDMI</td>
                    <td>1</td>
                    <td> 1/2/24</td>
                    <td class="action-btn"> <b>Berlangsung</b></td>
                </tr>
                <tr>
                    <td>Terminal Listrik</td>
                    <td>1</td>
                    <td>9/2/25</td>
                    <td class="action-btn"><b>Berlangsung</b></td>
                </tr>
                <tr>
                    <td>Infocus</td>
                    <td>1</td>
                    <td>9/2/25</td>
                    <td class="action-btn"><b>Berlangsung</b></td>
                </tr>
                <tr>
                    <td>Sapu</td>
                    <td>1</td>
                    <td>22/2/25</td>
                    <td class="action-btn"><b>Berlangsung</b></td>
                </tr>
                <tr>
                    <td>pel</td>
                    <td>1</td>
                    <td>19/2/25</td>
                    <td class="action-btn"><b>Berlangsung</b></td>
                </tr>
                <tr>
                    <td>Tong Sampah</td>
                    <td>1</td>
                    <td>2/3/25</td>
                    <td class="action-btn"><b>Berlansung</b></td>
                </tr>
                <tr>
                    <td>Alas kaki</td>
                    <td>1</td>
                    <td>9/3/25</td>
                    <td class="action-btn"><b>Berlansung</b></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>