<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\RestaController;
use App\Http\Controllers\MultController;
use App\Http\Controllers\DivController;

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
    return view('app');
})->name('oper');

Route::get('suma',[SumaController::class,'vistaSuma'])->name('suma');
Route::post('suma',[SumaController::class,'mostrarSuma'])->name('suma');

Route::get('resta',[RestaController::class,'vistaResta'])->name('resta');
//Route::post('resta',[RestaController::class,'vistaResta'])->name('resta');

Route::get('mult',[MultController::class,'vistaMult'])->name('mult');
//Route::post('mult',[MultController::class,'vistaMult'])->name('mult');

Route::get('div',[DivController::class,'vistaDiv'])->name('div');
//Route::post('div',[DivController::class,'vistaDiv'])->name('div');