<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkembangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode',
        'tanggal',
        'jml_populasi',
        'atrain',
        'bw_datang',
        'kondisi',
        'umur',
        'std_feed',
        'act_feed',
        'mati_deplesi',
        'culling_deplesi',
        'afkir_deplesi',
    ];

    // Tambahan jika ada relasi atau metode tambahan yang diperlukan
}
