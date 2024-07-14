<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaketMakanan extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'paket_makanans';

    protected $fillable = [
        'kategori',
        'nama',
        'deskripsi',
        'harga',
        'idmakanan',
        'idkue',
        'idminuman',
        'idbuah',
    ];
}
