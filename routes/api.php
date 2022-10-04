<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WebsitePostController;
use App\Http\Controllers\WebsiteSubscribeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [AuthController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('websites', WebsiteController::class);

    Route::post('websites/{website}/subscribe', WebsiteSubscribeController::class);

    Route::apiResource('websites.posts', WebsitePostController::class);
});
