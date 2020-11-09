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
Route::get('/registrar' ,  [App\Http\Controllers\ClienteController::class, 'index']);
Route::get('/cliente/{id}' ,  [App\Http\Controllers\ClienteController::class, 'show']);
Route::get('/pagar/{id}' ,  [App\Http\Controllers\PagoController::class, 'pagar']);
Route::get('/deuda' ,  [App\Http\Controllers\ClienteController::class, 'deuda']);
Route::post('/agregarcliente' ,  [App\Http\Controllers\ClienteController::class, 'store']);
Route::post('/home' ,  [App\Http\Controllers\ClienteController::class, 'update']);
Route::get('/pagado/{idpago}/{idcliente}' ,  [App\Http\Controllers\PagoController::class, 'pagado']);

Route::get('/test', [App\Http\Controllers\PagoController::class, 'testAutomatic']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
