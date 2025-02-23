<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinJaa Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-200 h-screen p-6 flex flex-col">
        <img src="{{asset('assets/logo.png')}}" alt="Illustration"></img>
        <ul class="mt-6 space-y-4">
            <li><a href="{{ route('mahasiswa.dashboard') }}" class="flex items-center text-gray-700 hover:text-orange-600">🏠 Beranda</a></li>
            <li><a href="{{ route('barang.index') }}" class="flex items-center text-gray-700 hover:text-orange-600">📦 Daftar Barang</a></li>
            <li><a href="{{ route('mahasiswa.peminjaman') }}" class="flex items-center text-gray-700 hover:text-orange-600">📄 Peminjaman</a></li>
            <li><a href="#" class="flex items-center text-gray-700 hover:text-orange-600">👤 Profil Pengguna</a></li>
            <li><a href="#" class="flex items-center text-gray-700 hover:text-orange-600">⚙ Pengaturan</a></li>
        </ul>
        <a href="{{ route('login') }}" class="mt-auto text-gray-700">🚪 Keluar</a>
    </div>
    
    <!-- Konten Utama -->
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <input type="text" placeholder="Cari..." class="border p-2 rounded-lg w-80">
            <div class="bg-gray-300 p-2 rounded-full">👤</div>
        </div>
        <br>
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h3 class="text-xl font-bold">Hi, Bagas Alif 👋</h3>
            <p class="text-gray-600">Mau pinjam apa hari ini?</p>
        </div>
        
        <div class="grid grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md text-center font-semibold text-lg">Rekomendasi</div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center font-semibold text-lg">Yang Kamu Pinjam</div>
        </div>
    </div>
</body>
</html>
