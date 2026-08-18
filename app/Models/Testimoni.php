<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = ['nama', 'pesan', 'rating', 'foto', 'disetujui', 'tampil_home'];

    protected $casts = [
        'disetujui'   => 'boolean',
        'tampil_home' => 'boolean',
        'rating'      => 'integer',
    ];
}