<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'tanggal',
        'jam',
        'mata_kuliah',
        'kode_dosen',
        'kode_ruangan',
    ];
}