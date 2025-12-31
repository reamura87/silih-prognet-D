<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'nama_peminjam',
        'tanggal_pinjam',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
