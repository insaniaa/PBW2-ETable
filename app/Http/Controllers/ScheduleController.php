<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('kelola-jadwal'); // Pastikan view 'kelola-jadwal.blade.php' ada di folder resources/views
    }
}
