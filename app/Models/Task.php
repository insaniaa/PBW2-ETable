<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'Kelas',
        'Matakuliah',
        'kode_Dosen',
        'due_date',
        'deskripsi_tugas',
    ];
}


