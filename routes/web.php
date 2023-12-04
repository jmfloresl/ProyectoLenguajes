<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clientes;

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
    return view('login');
});

Route::get('/cliente/registro', function () {
    return view('registro');
})->name('cliente.registro');

Route::get('/cliente/login', function () {
    return view('login');
})->name('cliente.login');

Route::get('/cliente/home', function () {
    return view('home');
})->name('home');



Route::post('/clientes/iniciar', [Clientes::class,'validacionDeUsuario'])->name('cliente.iniciar');

Route::post('/clientes/registrar', [Clientes::class,'registrar'])->name('cliente.registrar');