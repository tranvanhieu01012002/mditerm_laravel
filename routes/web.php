<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VegetableController;
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

Route::get('/foods', function () {
    return view('index');
});

Route::resource('vegetable',VegetableController::class);
Route::get('vegetable/ca/{id}',[VegetableController::class,'indexCategory'])->name('indexCategory');