<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;


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

        // Categoria
Route::get('/categoria','App\Http\Controllers\CategoriaController@categoria');
Route::get('/categoria/{id}','App\Http\Controllers\CategoriaController@categoriaById');
Route::post('/categoria/inserir', 'App\Http\Controllers\CategoriaController@store');
Route::delete('/categoria/{id}','App\Http\Controllers\CategoriaController@destroy');

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
