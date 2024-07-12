<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerjanjangBelanja extends Model
{
    use HasFactory;

    protected $table = 'kerjanjang_belanjas';

    protected $fillable = [
        'idUser',
        'idProduk',
        'jumlah',
        'harga',
    ];
}
