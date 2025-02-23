<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinJaa - Laporan Pinjaman</title>
    <style>
        /* Global Style */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #f3f3f3;
            padding: 20px;
            display: flex;
            flex-direction: column;
            border-right: 3px solid #d1d1d1;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
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
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 16px;
        }
        .sidebar ul li:hover {
            background: #e0e0e0;
            border-radius: 5px;
        }

        /* Content Area */
        .content {
            flex: 1;
            padding: 30px;
        }

        /* Header */
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

        /* Table Styling */
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f3f3f3;
            font-weight: bold;
        }

        /* Button Styles */
        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-update {
            background-color: #ffff00;
            color: black;
        }
        .btn-delete {
            background-color: #DB1514;
            color: white;
        }

        /* Add Item Button */
        .add-btn {
            background: gray;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>PinJaa</h2>
        <ul>
            <li>🏠 Beranda</li>
            <li>📦 Daftar Barang</li>
            <li>📄 Peminjaman</li>
            <li>👤 Profil Pengguna</li>
            <li>⚙ Pengaturan</li>
            <li>🚪 Keluar</li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Header -->
        <div class="header">
            <input type="text" placeholder="Telusuri" class="search-bar">
            <div class="profile-button">👤</div>
        </div>

        <!-- Laporan Pinjaman -->
        <h2>Laporan Pinjaman</h2>
        <button class="add-btn">+ Barang</button>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HDMI</td>
                        <td>10</td>
                        <td><img src="https://via.placeholder.com/50" alt="HDMI"></td>
                        <td>
                            <button class="btn btn-update">Update</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Infocus</td>
                        <td>10</td>
                        <td><img src="https://via.placeholder.com/50" alt="Infocus"></td>
                        <td>
                            <button class="btn btn-update">Update</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Terminal Listrik</td>
                        <td>10</td>
                        <td><img src="https://via.placeholder.com/50" alt="Terminal Listrik"></td>
                        <td>
                            <button class="btn btn-update">Update</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sapu</td>
                        <td>10</td>
                        <td><img src="https://via.placeholder.com/50" alt="Sapu"></td>
                        <td>
                            <button class="btn btn-update">Update</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pel</td>
                        <td>10</td>
                        <td><img src="https://via.placeholder.com/50" alt="Pel"></td>
                        <td>
                            <button class="btn btn-update">Update</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tong Sampah</td>
                        <td>10</td>
                        <td><img src="https://via.placeholder.com/50" alt="Tong Sampah"></td>
                        <td>
                            <button class="btn btn-update">Update</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Alas Kaki</td>
                        <td>10</td>
                        <td><img src="https://via.placeholder.com/50" alt="Alas Kaki"></td>
                        <td>
                            <button class="btn btn-update">Update</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>