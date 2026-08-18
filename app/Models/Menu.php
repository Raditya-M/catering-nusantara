<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nama', 'paket', 'deskripsi', 'harga', 'gambar', 'aktif'];

    protected $casts = [
        'aktif' => 'boolean',
    ];
}