<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataUsers;
use PHPUnit\Framework\TestStatus\Risky;
use Illuminate\Support\Facades\Auth;

Route::group([
    'middleware' => 'api',
], function ($router) {

    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
    Route::get('/obtenerusuarios', [DataUsers::class, 'obtenerusuarios'])->middleware('auth:api')->name('obtenerusuarios');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');


//test
Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando correctamente']);
});


$credentials = ['email' => 'admin@example.com', 'password' => 'admin1234'];
Auth::attempt($credentials);