<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Correct the class name

class Pangkalan extends Model // Correct the class name
{
    use HasFactory;

    protected $table = 'pangkalan';

    protected $fillable = [
        'nama_pangkalan',
        'nomor_pangkalan',
        'alamat'
    ];

    public $timestamps = false;
}
