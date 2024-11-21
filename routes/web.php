<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/add-to-do-list', [HomeController::class, 'add']);
Route::post('/add-to-do-list', [HomeController::class, 'store']);
Route::get('/to-do-list-update/{id}', [HomeController::class, '']);
Route::get('/to-do-list-update/{id}', [HomeController::class, 'update'])->name('update');

Route::get('/dashboard', function ()
{
    return view('dashboard.dashboard');
});