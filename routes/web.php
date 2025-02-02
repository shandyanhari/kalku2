<?php

//use App\Http\Controllers\ProsesController;
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
    return view('kalkulator.index');
});

Route::get('kalkulator2', function () {
    return view('kalkulator.kalkulator2');
});

Route::resource('proses', ProsesController::class);
