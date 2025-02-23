<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
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
        
    <!-- Content -->
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <input type="text" placeholder="Cari..." class="border p-2 rounded-lg w-80">
            <div class="bg-gray-300 p-2 rounded-full">👤</div>
        </div>
        
        <h1 class="text-2xl font-bold mb-4">Daftar Barang</h1>
        <a href="{{ route('barang.create') }}" class="bg-blue-400 text-white px-4 py-2 rounded">+ Barang</a>
        
        <table class="mt-4 w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-300">
                <tr>
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-left">Jumlah</th>
                    <th class="p-3 text-left">Gambar</th>
                    <th class="p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                <tr class="border-b">
                    <td class="p-3">{{ $item->id }}</td>
                    <td class="p-3">{{ $item->nama_barang }}</td>
                    <td class="p-3">{{ $item->jumlah_barang }}</td>
                    <td class="p-3">
                        @if ($item->gambar_barang)
                            <img src="{{ asset('storage/' . $item->gambar_barang) }}" class="w-12 h-12">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('barang.edit', $item->id) }}" class="bg-yellow-300 px-4 py-2 rounded">Update</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
