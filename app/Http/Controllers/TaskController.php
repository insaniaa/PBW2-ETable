<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function view()
    {
        $tasks = Task::all();
        return view('tasks.view', compact('tasks'));
    }

    public function showTasks()
    {
        $tasks = Task::all();
        return view('tasks.view', compact('tasks')); 
    }
    

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Kelas' => 'required|string|max:255',
            'Matakuliah' => 'required|string|max:255',
            'kode_Dosen' => 'required|string|max:255',
            'due_date' => 'required|date',
            'deskripsi_tugas' => 'nullable|string',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil ditambahkan.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'Kelas' => 'required|string|max:255',
            'Matakuliah' => 'required|string|max:255',
            'kode_Dosen' => 'required|string|max:255',
            'due_date' => 'required|date',
            'deskripsi_tugas' => 'nullable|string',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil diperbarui.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil dihapus.');
    }

   

    public function show($id)
{
    $task = Task::findOrFail($id); // Cari data berdasarkan ID atau lempar error 404 jika tidak ditemukan
    return view('tasks.show', compact('task')); // Kirim data ke view
}

}
