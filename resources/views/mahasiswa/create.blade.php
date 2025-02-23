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

<style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f5f5f5;
        color: #333;
    }

    .container {
        width: 100%;
        max-width: 400px;
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .success-message {
        color: green;
        font-weight: bold;
        margin-bottom: 15px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 0.5px;
    }

    label {
        font-size: 16px;
        font-weight: bold;
        text-align: left;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        outline: none;
    }

    button {
        background: #ff6600;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #e05500;
    }
</style>


@endsection
