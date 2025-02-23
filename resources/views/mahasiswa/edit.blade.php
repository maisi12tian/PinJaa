<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama" name="nama" value="{{ $barang->nama_barang }}" required>
        <br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" value="{{ $barang->jumlah_barang }}" required>
        <br><br>

        <label for="gambar">Gambar:</label>
        <input type="file" id="gambar" name="gambar">
        <br>
        @if($barang->gambar_barang)
            <p>Gambar saat ini:</p>
            <img src="{{ asset('storage/' . $barang->gambar_barang) }}" width="100">
        @endif
        <br><br>

        <button type="submit">Update Barang</button>
    </form>
</body>
</html>