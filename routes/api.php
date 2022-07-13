<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\vegetableAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('vegetable',[vegetableAPI::class, 'search']);

Route::get('vegetable/count',function(){
    // su dung with count and vegetables in model
   $query =  App\Models\Categori::withCount(['vegetables'])->get();
   return response()->json(['data'=>$query]);
});