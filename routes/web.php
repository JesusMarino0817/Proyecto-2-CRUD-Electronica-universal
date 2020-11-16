<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComprobanteController;

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

Route::get('/inicio', function () {
  return view('inicio');
});

Route::get('/articulos1', function () {
  return view('articulos1');
});

Route::get('/articulos2', function () {
  return view('articulos2');
});

Route::get('/articulos3', function () {
  return view('articulos3');
});

Route::get('/articulos1User', function () {
  return view('articulos1User');
});

Route::get('/articulos2User', function () {
  return view('articulos2User');
});

Route::get('/articulos3User', function () {
  return view('articulos3User');
});

Route::get('/bienvenida/{nombre}/{apellido?}', function($nombre, $apellido = null) {
  return view('bienvenida', compact('nombre', 'apellido'));
})->name('bienvenida');

Route::resource('comprobante', ComprobanteController::class)->middleware(['auth:sanctum']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
