<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;

class Pangkalan extends Models
{
    use HasFactory;
    protected $fillable = [
        'nama_pangkalan',
        'nomor_pangkalan',
        'alamat'
    ];
    public $timestamps = false;
}
