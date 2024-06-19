<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DiagnosaController;
use App\Http\Controllers\API\ApiLoginController;
use App\Http\Controllers\API\ApiRegisterController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('diagnosa')->group(function () {
    Route::get('/', [DiagnosaController::class, 'index']);
    Route::post('/analisa', [DiagnosaController::class, 'analisa']);
    Route::post('/reset', [DiagnosaController::class, 'reset']);
});

Route::post('login', [ApiLoginController::class, 'login']);
Route::post('logout', [ApiLoginController::class, 'logout']);



Route::post('signup', [ApiRegisterController::class, 'signup']);

