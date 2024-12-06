<?php

namespace App\Http\Controllers;

use App\Models\Jadwal; // Jangan lupa tambahkan model Jadwal
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwal.index', compact('jadwals'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'hari' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'mata_kuliah' => 'required|string|max:255',
            'kode_dosen' => 'required|string|max:50',
            'kode_ruangan' => 'required|string|max:50',
        ]);

        // Simpan data ke database
        Jadwal::create([
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'mata_kuliah' => $request->mata_kuliah,
            'kode_dosen' => $request->kode_dosen,
            'kode_ruangan' => $request->kode_ruangan,
        ]);

        // Redirect atau beri pesan sukses
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil disimpan.');
    }

}