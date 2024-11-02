<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('mahasiswas', MahasiswaController::class);
    Route::delete('/api/mahasiswas/{id}', 'MahasiswaController@destroy')->middleware('admin');
    Route::post('/api/mahasiswas', 'MahasiswaController@store')->middleware('admin'); 
    Route::put('/api/mahasiswas/{id}', 'MahasiswaController@update')->middleware('admin');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
