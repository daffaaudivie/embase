<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'id_petugas',
        'id_pangkalan',
        'jumlah',
        'harga',
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