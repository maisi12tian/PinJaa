<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinJaa - Laporan Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100 text-gray-800">
    <div class="w-64 bg-gray-200 h-screen p-6 flex flex-col">
        <img src="{{asset('assets/logo.png')}}" alt="Illustration"></img>
        <ul class="mt-6 space-y-4">
            <li><a href="{{ route('mahasiswa.dashboard') }}" class="flex items-center text-gray-700 hover:text-orange-600">🏠 Beranda</a></li>
            <li><a href="{{ route('barang.index') }}" class="flex items-center text-gray-700 hover:text-orange-600">📦 Daftar Barang</a></li>
            <li><a href="{{ route('mahasiswa.peminjaman') }}" class="flex items-center text-gray-700 hover:text-orange-600">📄 Peminjaman</a></li>
            <li><a href="{{ route('mahasiswa.profile') }}" class="flex items-center text-gray-700 hover:text-orange-600">👤 Profil Pengguna</a></li>
            <li><a href="{{ route('mahasiswa.pengaturan') }}" class="flex items-center text-gray-700 hover:text-orange-600">⚙ Pengaturan</a></li>
        </ul>
        <a href="{{ route('login') }}" class="mt-auto text-gray-700">🚪 Keluar</a>
    </div>

    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <input type="text" placeholder="Cari..." class="border p-2 rounded-lg w-80">
            <div class="bg-gray-300 p-2 rounded-full">👤</div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Peminjaman</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah</th>
                        <th class="border border-gray-300 px-4 py-2">Waktu</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="border border-gray-300 px-4 py-2">HDMI</td>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">1/2/25</td>
                        <td class="border border-gray-300 px-4 py-2 text-blue-600 font-bold">Berlangsung</td>
                        <td class="p-3 flex gap-2">
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded" onclick="return confirm('Anda yakin barang sudah dikembalikan?')">Selesai</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
