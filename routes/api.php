<?php

use App\Http\Controllers\CMS\TailorController;
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

Route::prefix('v1/tailor')->controller(TailorController::class)->group(function() {
    Route::get('/' , 'getAllData');
    Route::post('/create' , 'createData');
    Route::get('/get/{id}' , 'getDataById');
    Route::post('/update/{id}' , 'updateData');
});
