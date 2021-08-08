<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
   /// return $request->user();
//});

Route::post('/lista', [ListaController::class,'create']);
Route::get('/lista', [ListaController::class,'index']);
Route::delete('/lista/{id}', [ListaController::class,'destroy']);
Route::put('/lista/{id}', [ListaController::class,'update']);
