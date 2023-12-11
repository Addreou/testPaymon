<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\VideoController;
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

Route::controller(AuthController::class)->group(function () {
    Route::post('/login','login');
});

Route::middleware('auth:sanctum')->group(function () {

    Route::controller(VideoController::class)->group(function () {
        Route::get('/listado_videos','index');
        Route::post('/crear_video','store');
        Route::put('/editar_video/{IdVideo}','update');
        Route::delete('/eliminar_video/{IdVideo}','delete');
    });
});