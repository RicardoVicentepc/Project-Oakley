<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','App\Http\Controllers\WelcomeController@qtdProduto');

Route::get('/','App\Http\Controllers\WelcomeController@index');

Route::get('/contato', function () {
    return view('contato');
});


Route::get('/cliente','App\Http\Controllers\ClienteController@index');

/* Route::get('/cliente', function () {
    return view('cliente');
});
 */
Route::get('/categoria','App\Http\Controllers\CategoriaController@index');

/* Route::get('/categoria', function () {
    return view('categoria');
});
 */

Route::get('/produto','App\Http\Controllers\ProdutoController@index');

/* Route::get('/produto', function () {
    return view('produto');
});
 */

Route::get('/pedido','App\Http\Controllers\PedidoController@index');

/* Route::get('/pedido', function () {
    return view('pedido');
}); */

Route::post('/categoria/inserir', 'App\Http\Controllers\CategoriaController@store');
Route::get('/categoria/{id}','App\Http\Controllers\CategoriaController@destroy');

Route::post('/cliente/inserir', 'App\Http\Controllers\ClienteController@store');
Route::get('/cliente/{id}','App\Http\Controllers\ClienteController@destroy');

Route::post('/produto/inserir', 'App\Http\Controllers\ProdutoController@store');
Route::get('/produto/{id}','App\Http\Controllers\ProdutoController@destroy');

Route::post('/pedido/inserir', 'App\Http\Controllers\PedidoController@store');
Route::get('/pedido/{id}','App\Http\Controllers\PedidoController@destroy');

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
