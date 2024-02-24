<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\DataTelkomController;
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

Route::middleware("auth")->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name("dashboard");
    //Data NTE Route
    Route::get('/data-nte', [DataController::class, 'showDataNTE'])->name("nte");
    //Data ALL TYPE ROUTE
    Route::get('/data-all', [DataController::class, 'showDataALL'])->name("showDataALL");
    //Data ALL TYPE ROUTE
    Route::get('/data-alert', [AlertController::class, 'showDataAlert'])->name("showDataAlert");
    Route::get('/data-alert', [AlertController::class, 'fetchAlert'])->name("fetchAlert");
    //Data PSB ROUTE
    Route::get('/data-psb', [PsbController::class, 'showDataPsb'])->name("showDataPsb");
    Route::get('/data-psb', [PsbController::class, 'fetchDataPsb'])->name("fetchDataPsb");
    //Data KONTRAK ROUTE
    Route::get('/data-kontrak', [KontrakController::class, 'showDataKontrak'])->name("showDataKontrak");
    Route::get('/data-kontrak', [KontrakController::class, 'fetchKontrak'])->name("fetchKontrak");
    Route::post('/data-kontrak/update-cell', [KontrakController::class, 'updateCellValue']);
    //Data Telkom
    Route::get('/data-telkom', [DataTelkomController::class, 'showDataTelkom'])->name("showDataTelkom");
    Route::get('/data-telkom', [DataTelkomController::class, 'fetchDataTelkom'])->name("fetchDataTelkom");

});

Route::middleware("auth")->group(function () {
    //Kelola admin route
    Route::get('/kelola-admin', [AdminController::class, 'showDataAdmin'])->name("showDataAdmin");
    Route::post('/kelola-admin/store', [AdminController::class, 'store'])->name("store");
    Route::put('/kelola-admin/update/{id}', [AdminController::class, 'update'])->name("update");
    Route::delete('/kelola-admin/delete/{id}', [AdminController::class, 'delete'])->name("delete");
});





