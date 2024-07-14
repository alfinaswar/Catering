<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transaksis';

    protected $fillable = [
        'idcustomer',
        'idtransaksi',
        'alamatKirim',
        'total',
        'buktibayar',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'idcustomer', 'id');
    }

    public function details()
    {
        return $this->hasMany(TransaksiDetail::class, 'idtransaksi', 'idtransaksi');
    }
}
