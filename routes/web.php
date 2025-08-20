<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ConfiguracionController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios')->middleware('auth');
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');



Route::get('/reporte', [ReporteController::class, 'index'])->name('reporte');
Route::get('/reportepdf', [ReporteController::class, 'generarPDF'])->name('reporte.pdf');



Route::prefix('configuracion')->group(function () {
    Route::get('perfil', [ConfiguracionController::class, 'perfil'])->name('configuracion.perfil');
    Route::get('password', [ConfiguracionController::class, 'password'])->name('configuracion.password');
    Route::get('preferencias', [ConfiguracionController::class, 'preferencias'])->name('configuracion.preferencias');
    Route::get('seguridad', [ConfiguracionController::class, 'seguridad'])->name('configuracion.seguridad');
    Route::get('administracion', [ConfiguracionController::class, 'administracion'])->name('configuracion.administracion');
    Route::get('soporte', [ConfiguracionController::class, 'soporte'])->name('configuracion.soporte');
});


