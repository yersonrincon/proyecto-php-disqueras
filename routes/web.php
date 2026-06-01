<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\DisqueraController;
use App\Http\Controllers\GeneroController;

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

//Route::get('/cliente/create',[ClienteController::class,'create']);

/*Route::get('/cliente', function () {
    return view('cliente.index');
});*/

Route::resource('cliente',ClienteController::class);
Route::resource('artista',ArtistaController::class);
Route::resource('cancion',CancionController::class);
Route::resource('album',AlbumController::class);
Route::resource('disquera',DisqueraController::class);
Route::resource('factura',FacturaController::class);
Route::resource('genero',GeneroController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
