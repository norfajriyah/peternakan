<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'tanggal',
        'distributor',
        'jns_ayam',
        'jumlah_ayam',
        'harga_kontrak',
        'total_harga',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
