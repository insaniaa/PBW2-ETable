<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
        {
            $tugas = Tugas::all();
            return view('user.mahasiswa', compact('tugas'));
        }
}
