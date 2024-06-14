<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelanggan',
        'jenis_kelamin',
        'no_telp',
        'alamat',
        'kota',
        'jenis_layanan',
        'tempat_layanan',
        'tanggal',
        'jam',
        'status',
    ];

    protected $attributes = [
        'status' => 'Diproses',
    ];
}
