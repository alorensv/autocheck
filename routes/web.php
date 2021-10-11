<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
    return view('pages.inicio');
})->name('inicio');

Route::post('/busqueda', [WebController::class, 'busqueda'])->name('busqueda');
Route::get('/servicios', [WebController::class, 'servicios'])->name('servicios');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chart', [App\Http\Controllers\HomeController::class, 'chart'])->name('chart');