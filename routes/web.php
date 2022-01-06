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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::Resource('republica', App\Http\Controllers\RepublicaController::class);
Route::get('/mapa', function () {
    return view('mapa');
});
Route::Resource('perfil', App\Http\Controllers\PerfilController::class);

Route::get('/importante', function () {
    return view('importante');
});