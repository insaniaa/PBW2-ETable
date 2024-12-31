<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return view('kelola-matkul'); // Pastikan view 'kelola-matkul.blade.php' ada di folder resources/views
    }
}
