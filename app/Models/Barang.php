<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $primarykey = "id";
    protected $fillable = ['nama_barang', 'jumlah_barang', 'gambar_barang'];
}