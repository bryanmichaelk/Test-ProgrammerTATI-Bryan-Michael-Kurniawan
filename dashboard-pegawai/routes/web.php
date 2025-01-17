<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
}); 

Route::middleware(['auth'])->group(function() {
    Route::controller(LogController::class)->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('', 'index')->name('logs');
        Route::get('create', 'create')->name('logs.create');
        Route::post('create', 'store')->name('logs.store');
        Route::get('edit/{id}', 'edit')->name('logs.edit');
        Route::put('edit/{id}', 'update')->name('logs.update');
        Route::delete('delete/{id}', 'delete')->name('logs.delete');

        Route::get('verifikasi', 'verifikasi')->name('logs.verifikasi');
        Route::put('verifikasi/{id}', 'updateStatus')->name('logs.updateStatus');
    });
});