<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;

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
Route::get('/data-all', [DataController::class, 'showDataALL'])->name("all")->middleware("auth");
// Route::get('/data-all', [DataController::class, 'headerToArray'])->name("sumall")->middleware("auth");
