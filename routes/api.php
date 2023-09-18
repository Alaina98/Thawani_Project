<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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
//Route::apiResource('users',UserController::class);
Route::prefix('users')
    ->name('users.')
    ->group(function(){

    Route::get('/',[UserController::class , 'index'])->name('index');
    Route::post('/',[UserController::class , 'store'])->name('store');
    Route::get('/{user}',[UserController::class , 'show'])->name('show');
    Route::put('/{user}',[UserController::class , 'update'])->name('update');
    Route::delete('/{user}',[UserController::class , 'destroy'])->name('destroy');


    });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/register', [AuthController::class,'register']);
    Route::post('/login', [AuthController::class,'login']);
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
