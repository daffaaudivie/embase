<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'id_petugas',
        'id_pangkalan',
        'id_transaksi',
        'harga_total',
        'status',
        'date'
    ];

    public $timestamps = false;

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }

    public function pangkalan()
    {
        return $this->belongsTo(Pangkalan::class, 'id_pangkalan');
    }
}