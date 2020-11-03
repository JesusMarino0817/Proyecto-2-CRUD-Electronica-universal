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

Route::get('/bienvenida/{nombre}/{apellido?}', function($nombre, $apellido = null) {
  return view('bienvenida', compact('nombre', 'apellido'));
})->name('bienvenida');

Route::resource('comprobante', ComprobanteController::class);