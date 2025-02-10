<?php

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Fleuriste\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('admin.dashboard');
Route::get('/client/dashboard', [ClientController::class, 'index'])->middleware('auth')->name('client.dashboard');
