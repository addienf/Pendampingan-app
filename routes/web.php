<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendampinganController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/detail', function () {
    return view('Content.addDetailPendampingan');
});

Route::get('/login', function () {
    return view('Content.loginPage');
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('Content.registerPage');
})->middleware('guest');

Route::post('/post-register', [RegisterController::class, 'store']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// Pendampingan
Route::get('/list', [PendampinganController::class, 'index']);
Route::get('/add', [PendampinganController::class, 'create']);
Route::post('/add', [PendampinganController::class, 'store']);
Route::get('/edit/{id}', [PendampinganController::class, 'edit']);
Route::patch('/list/{id}', [PendampinganController::class, 'update']);
Route::delete('/list/{id}', [PendampinganController::class, 'destroy']);
