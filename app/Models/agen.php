<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agen extends Model
{
    protected $table = 'agen';
    protected $fillable = [
        'nama_agen',
        'nomor_agen',
        'alamat',
    ];
    public $timestamps = false;
}

