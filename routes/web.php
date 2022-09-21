<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tipoproduto', "App\Http\Controllers\TipoProdutoController@index")->name('tipoproduto.index');
Route::get('tipoproduto/create', "App\Http\Controllers\TipoProdutoController@create")->name('tipoproduto.create');
Route::get('tipoproduto/edit/{id}', "App\Http\Controllers\TipoProdutoController@edit")->name('tipoproduto.edit');
Route::get('tipoproduto/delete/{id}', "App\Http\Controllers\TipoProdutoController@destroy")->name('tipoproduto.destroy');
Route::put('tipoproduto/{id}', "App\Http\Controllers\TipoProdutoController@update")->name('tipoproduto.update');
Route::post('tipoproduto', "App\Http\Controllers\TipoProdutoController@store")->name('tipoproduto.store');
Route::get('tipoproduto/{id}', "App\Http\Controllers\TipoProdutoController@show")->name('tipoproduto.show');

Route::get('produto', "App\Http\Controllers\ProdutoController@index")->name('produto.index');
Route::get('produto/create', "App\Http\Controllers\ProdutoController@create")->name('produto.create');
Route::get('produto/edit/{id}', "App\Http\Controllers\ProdutoController@edit")->name('produto.edit');
Route::get('produto/delete/{id}', "App\Http\Controllers\ProdutoController@destroy")->name('produto.destroy');
Route::put('produto/{id}', "App\Http\Controllers\ProdutoController@update")->name('produto.update');
Route::post('produto', "App\Http\Controllers\ProdutoController@store")->name('produto.store');
Route::get('produto/{id}', "App\Http\Controllers\ProdutoController@show")->name('produto.show');
