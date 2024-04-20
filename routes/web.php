<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PaginaController::class, 'index'])->name('index');
Route::get('/index2', [PaginaController::class, 'index2'])->name('index2');
Route::get('/about', [PaginaController::class, 'about'])->name('about');
Route::get('/services-details', [PaginaController::class, 'servicesDetails'])->name('services.details');
Route::get('/coming-soon', [PaginaController::class, 'coming-soon'])->name('coming-soon');
Route::get('/index2', [PaginaController::class, 'index2'])->name('index2');
