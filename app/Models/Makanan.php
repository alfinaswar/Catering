<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Makanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'makanans';

    protected $fillable = [
        'kategori',
        'nama',
        'deskripsi',
        'harga',
        'gambar',
    ];

    public function kategorimakan()
    {
        return $this->belongsTo(KategoriMakanan::class, 'kategori', 'id');
    }
}
