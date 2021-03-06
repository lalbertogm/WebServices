<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
Route::get('obtener/generos', [ApiController::class,'obtenerGeneros'])->name("obtener.generos");
Route::get('obtener/genero/{name}',  [ApiController::class,'obtenerGenero'])->name("obtener.genero");

Route::group(['middleware' => 'admin'], function () {  //----Grupo de rutas que pasan primero por el middleware

    Route::get('obtener/artista/{id}',[ApiController::class,'obtenerArtista'])->name("obtener.artista");

});
