<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PaginaController::class, 'index'])->name('index');
Route::get('/habitacion_sencilla', [PaginaController::class, 'habitacion_sencilla'])->name('habitacion_sencilla');
Route::get('/habitacion_sencilla_plus', [PaginaController::class, 'habitacion_sencilla_plus'])->name('habitacion_sencilla_plus');
Route::get('/habitacion_doble', [PaginaController::class, 'habitacion_doble'])->name('habitacion_doble');
Route::get('/habitacion_doble_plus', [PaginaController::class, 'habitacion_doble_plus'])->name('habitacion_doble_plus');
Route::get('/suit', [PaginaController::class, 'suit'])->name('suit');

Route::get('/about', [PaginaController::class, 'about'])->name('about');
Route::get('/services-details', [PaginaController::class, 'servicesDetails'])->name('services.details');
Route::get('/coming-soon', [PaginaController::class, 'coming-soon'])->name('coming-soon');
Route::get('/index2', [PaginaController::class, 'index2'])->name('index2');
Route::get('/blog', [PaginaController::class,'blog'])->name('blog');
