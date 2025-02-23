<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna - PinJaa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">
    <!-- Sidebar -->
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
    
    <!-- Konten Utama -->
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <input type="text" placeholder="Cari..." class="border p-2 rounded-lg w-80">
            <div class="bg-gray-300 p-2 rounded-full">👤</div>
        </div>

        <!-- Kartu Profil -->
        <div class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
            <!-- Foto Profil -->
            <div class="flex justify-center">
                @if (Auth::user()->foto)
                    <img src="{{ asset(Auth::user()->foto) }}" alt="Foto Profil" class="w-24 h-24 rounded-full border">
                @else
                    <img src="{{ asset('default-profile.png') }}" alt="Foto Default" class="w-24 h-24 rounded-full border">
                @endif
            </div>

            <!-- Informasi Profil -->
            <h2 class="text-center text-2xl font-bold mt-4">{{ Auth::user()->name }}</h2>
            <p class="text-center text-gray-600">{{ Auth::user()->email }}</p>

            <div class="mt-6 space-y-2">
                <p><strong>Nomor HP:</strong> {{ Auth::user()->phone ?? '-' }}</p>
                <p><strong>Alamat:</strong> {{ Auth::user()->alamat ?? '-' }}</p>
                <p><strong>Bergabung Sejak:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
            </div>

            <!-- Tombol Edit Profil -->
            <div class="mt-6 text-center">
                <a href="#" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition">
                    ✏️ Edit Profil
                </a>
            </div>
        </div>
    </div>
</body>
</html>
