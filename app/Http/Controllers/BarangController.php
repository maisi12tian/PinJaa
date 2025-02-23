<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('mahasiswa.daftarbarang', ["barang" => $barang]);
    }

    public function create()
    {
        return view("mahasiswa.create");
    }

    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('barang', 'public');
        } else {
            $gambarPath = null;
        }

        Barang::create([
            'nama_barang' => $request->nama,
            'jumlah_barang' => $request->jumlah,
            'gambar_barang' => str_replace('public/', 'storage/', $gambarPath) 
        ]);
        return redirect()->route("barang.index");
    }

    public function edit(string $id)
    {
        $barang = Barang::find($id);
        return view("mahasiswa.edit", ["barang" => $barang]);
    }

    public function update(Request $request,string $id)
    {
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('barang', 'public');
        } else {
            $gambarPath = null;
        }

        Barang::find($id)->update([
            'nama_barang' => $request->nama,
            'jumlah_barang' => $request->jumlah,
            'gambar_barang' => str_replace('public/', 'storage/', $gambarPath) 
        ]);
        return redirect()->route("barang.index");
    }

    public function destroy($id)
    {
        Barang::find($id)->delete();

        return redirect()->route("barang.index");
    }

    
}
