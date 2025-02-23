<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiPeminjaman extends Model
{
    use HasFactory;

    protected $fillable = ['peminjaman_id', 'admin_id', 'status'];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
