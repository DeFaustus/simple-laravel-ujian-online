<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UserController;
use App\Models\DataSoal;
use App\Models\Soal;
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

Route::group(['middleware'  => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::controller(MapelController::class)->group(function () {
        Route::get('dashboard/mapel', 'index');
        Route::put('/update', 'update');
        Route::delete('/hapus', 'hapus');
        Route::post('/tambah', 'tambah');
    });
    Route::controller(SoalController::class)->group(function () {
        Route::get('/dashboard/soal', 'index');
        Route::get('/dashboard/soal/tambahsoal', 'tambahSoal');
        Route::post('/tambahsoal', 'tambahSoalAction');
        Route::get('/dashboard/soal/tambahdatasoal/{soal}', 'dataSoalShow');
        Route::post('/tambahdatasoal', 'tambahDataSoalAction');
        Route::get('/dashboard/soal/lihatsoal/{id}', 'lihatSoal');
        Route::delete('dashboard/lihatsoal/hapus/{soal}', 'hapusDataSoal');
    });
    Route::controller(SiswaController::class)->group(function () {
        Route::get('dashboard/daftarsoal', 'index');
        Route::get('dashboard/kerjakansoal/{soal}', 'kerjakanSoal');
        Route::post('dashboard/jawab', 'jawab');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('dashboard/dataguru', 'indexGuru');
    });
    Route::post('/logout', [LoginController::class, 'logout']);
});
Route::group(['middleware'  => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name("login");
    Route::post('/login', [LoginController::class, 'login']);
});

Route::get('/', function () {
    return redirect()->to("/dashboard");
});
