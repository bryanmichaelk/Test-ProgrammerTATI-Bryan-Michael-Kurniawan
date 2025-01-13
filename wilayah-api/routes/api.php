<?php

use App\Http\Controllers\WilayahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/provinsi', [WilayahController::class, 'getAllProvinsi'] );
Route::get('/provinsi/{id}', [WilayahController::class, 'getProvinsiById']);
Route::post('/provinsi', [WilayahController::class, 'createProvinsi']);
Route::delete('/provinsi/{id}', [WilayahController::class, 'deleteProvinsi']);
Route::put('/provinsi/{id}', [WilayahController::class, 'updateProvinsi']);