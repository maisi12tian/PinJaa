<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - PinJaa</title>
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

        <!-- Kartu Pengaturan -->
        <div class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
            <h2 class="text-xl font-bold mb-4">Pengaturan Akun</h2>

                <!-- Nama -->
                <div class="mt-4">
                    <label class="block font-medium">Nama</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="w-full p-2 border rounded-lg">
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <label class="block font-medium">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-full p-2 border rounded-lg">
                </div>

                <!-- Kata Sandi -->
                <div class="mt-4">
                    <label class="block font-medium">Kata Sandi Baru</label>
                    <input type="password" name="password" class="w-full p-2 border rounded-lg" placeholder="Isi jika ingin mengganti">
                </div>

                <!-- Tombol Simpan -->
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition">
                        💾 Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
