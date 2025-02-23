<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}">Tambah Barang</a>
    <table border="1" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        @foreach ($barang as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" width="50" alt="Gambar Barang">
                @else
                    Tidak ada gambar
                @endif
            </td>
            <td>
                <a href="{{ route('barang.edit', $item->id) }}">Edit</a>
                <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
