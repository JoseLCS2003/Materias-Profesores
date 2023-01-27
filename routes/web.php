<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\materiaController;
use App\Http\Controllers\profesorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Materias
Route::get('/materias',[materiaController::class,'index'])->name('materias.index');
Route::get('/materias/nuevo',[materiaController::class,'agregar']);
Route::post('/materias/nueva',[materiaController::class,'create']);
Route::get('/materias/editar/{id}',[materiaController::class,'editar'])->name('materias.editar');
Route::put('/materias/editar/{id}',[materiaController::class,'update'])->name('materias.guardar');
Route::delete('/materias/eliminar/{id}',[materiaController::class,'eliminar'])->name('materias.eliminar');
Route::get('/materias/profesor/{id}',[materiaController::class,'materiaProfesor'])->name('materia.Profesores');
Route::get('/materia/profesor/nuevo/{id}',[materiaController::class,'materiaProfesorNuevo'])->name('materias.profesor.nuevo');


//Profesores
Route::get('/profesores',[profesorController::class,'index'])->name('profesores.index');
Route::get('/profesores/nuevo',[profesorController::class,'nuevo']);
Route::post('/profesores/nueva',[profesorController::class,'guardar']);
Route::get('/profesores/editar/{id}',[profesorController::class,'editar'])->name('profesores.editar');
Route::put('/profesores/editar/{id}',[profesorController::class,'update'])->name('profesores.guardar');
Route::delete('/profesores/eliminar/{id}',[profesorController::class,'eliminar'])->name('profesores.eliminar');

require __DIR__.'/auth.php';
