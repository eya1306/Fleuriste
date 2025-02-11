<?php

use App\Http\Controllers\API\ClientLogin;
use App\Http\Controllers\API\ClientLogout;
use App\Http\Controllers\API\ClientRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [ClientLogin::class, 'login']);
Route::post('/logout', [ClientLogout::class, 'logout'])->middleware('auth:sanctum');
Route::post('/register',[ClientRegister::class,'register']);
