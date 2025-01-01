<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('kelola.kelas'); // Redirect langsung ke Kelola Kelas
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tugas', [TugasController::class, 'index'])->name('tugas.index');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';

#add dari van

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

// Route::get('/dsn', function () {
//     return view('dosen');
// });

Route::get('/jdwlM', function () {
    return view('jdwl');
});

Route::get('/jdwlMa', function () {
    return view('jadwalMahasiswa');
});

Route::get('/jadwalkan', function () {
    return view('jadwalkanAdmin');
});

Route::get('/berandaA', function () {
    return view('berandaAdmin');
});

//task
Route::get('/tugas', [TaskController::class,'view' ]);
Route::resource('tasks', TaskController::class);

Route::get('/dsn', [TaskController::class,'index' ]);
Route::resource('tasks', TaskController::class);

Route::get('/tasks/view', [TaskController::class, 'index']);
Route::resource('tasks', TaskController::class);


Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('/kelola-kelas', function () {
    return view('kelola.kelas');
})->name('kelola.kelas');

Route::get('/kelola-jadwal', function () {
    return view('kelola.jadwal');
})->name('kelola.jadwal');

Route::get('/kelola-matkul', function () {
    return view('kelola.matkul');
})->name('kelola.matkul');

Route::get('/kelola-user', [UserController::class, 'index'])->name('kelola.user');

Route::resource('users', UserController::class);
