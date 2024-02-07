<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\PsbController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'showLoginForm');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
})->middleware("guest");

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name("dashboard")->middleware("auth");
//Data NTE Route
Route::get('/data-nte', [DataController::class, 'showDataNTE'])->name("nte")->middleware("auth");
//Data ALL TYPE ROUTE
Route::get('/data-all', [DataController::class, 'showDataALL'])->name("showDataALL")->middleware("auth");
//Data ALL TYPE ROUTE
Route::get('/data-alert', [AlertController::class, 'showDataAlert'])->name("showDataAlert")->middleware("auth");
Route::get('/data-alert', [AlertController::class, 'fetchAlert'])->name("fetchAlert")->middleware("auth");
//Data PSB ROUTE
Route::get('/data-psb', [PsbController::class, 'showDataPsb'])->name("showDataPsb")->middleware("auth");
Route::get('/data-psb', [PsbController::class, 'fetchDataPsb'])->name("fetchDataPsb")->middleware("auth");
//Data KONTRAK ROUTE
Route::get('/data-kontrak', [KontrakController::class, 'showDataKontrak'])->name("showDataKontrak")->middleware("auth");
Route::get('/data-kontrak', [KontrakController::class, 'fetchKontrak'])->name("fetchKontrak")->middleware("auth");





