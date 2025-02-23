@extends('layouts.app')

@section('content')
<div class="content">
    <h2>Tambah Barang</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama" name="nama" required>
        <br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required>
        <br><br>

        <label for="gambar">Gambar:</label>
        <input type="file" id="gambar" name="gambar">
        <br><br>

        <button type="submit">Tambah Barang</button>
    </form>
</div>
@endsection
