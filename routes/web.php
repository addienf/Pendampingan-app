<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailPendampinganController;
use App\Http\Controllers\PendampinganController;
use App\Http\Controllers\PerangkatDaerahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Content.loginPage');
})->name('login')->middleware('guest');

Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// Pendampingan
Route::group(['middleware' => ['auth', 'rolecek:user,admin']], function () {
    Route::get('/list', [PendampinganController::class, 'index']);
    Route::get('/listDetail', [DetailPendampinganController::class, 'index']);
    Route::get('/listDetail/{id}', [DetailPendampinganController::class, 'detailbyID']);
    Route::get('/detailAplikasi/{id_pendampingan}/{deskripsi}/{id}', [DetailPendampinganController::class, 'edit']);
    Route::get('/detailAplikasi/{id}', [DetailPendampinganController::class, 'homeDetail']);
    Route::get('/editUser/{id}', [UserController::class, 'edit']);
    Route::patch('/listUser/{id}', [UserController::class, 'update']);
});

Route::group(['middleware' => ['auth', 'rolecek:admin']], function () {
    Route::get('/register', function () {
        return view('Content.registerPage');
    });

    Route::post('/post-register', [RegisterController::class, 'store']);

    Route::get('/add', [PendampinganController::class, 'create']);
    Route::post('/add', [PendampinganController::class, 'store']);
    Route::get('/edit/{id}', [PendampinganController::class, 'edit']);
    Route::patch('/list/{id}', [PendampinganController::class, 'update']);
    Route::delete('/list/{id}', [PendampinganController::class, 'destroy']);

    // Perangkat Daerah
    Route::get('/listPD', [PerangkatDaerahController::class, 'index']);
    Route::get('/addPD', [PerangkatDaerahController::class, 'create']);
    Route::post('/addPD', [PerangkatDaerahController::class, 'store']);
    Route::get('/editPD/{id}', [PerangkatDaerahController::class, 'edit']);
    Route::patch('/listPD/{id}', [PerangkatDaerahController::class, 'update']);

    // Detail Pendampingan
    Route::get('/download/{filename}', [DetailPendampinganController::class, 'download'])->name('download.file');
    Route::get('listDetail/addDt/{id}', [DetailPendampinganController::class, 'create']);
    Route::post('listDetail/addDt/{id}', [DetailPendampinganController::class, 'store2']);
    Route::delete('/listDetail/{desc}', [DetailPendampinganController::class, 'destroy']);

    // User
    Route::get('/listUser', [UserController::class, 'index']);
    Route::get('/addUser', [UserController::class, 'create']);
    Route::post('/addUser', [UserController::class, 'store']);
    Route::delete('/listUser/{id}', [UserController::class, 'destroy']);
});
