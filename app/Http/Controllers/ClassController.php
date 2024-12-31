<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view('kelola-kelas'); // Pastikan view 'kelola-kelas.blade.php' ada di folder resources/views
    }
}
