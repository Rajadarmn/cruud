<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\biliardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[biliardController::class,'home']);
Route::get('/create',[biliardController::class,'create']);
Route::post('/store',[biliardController::class,'store']);
Route::get('/{id}/edit',[biliardController::class,'edit']);
Route::put('/edit/{id}',[biliardController::class,'update']);
Route::delete('/update/{id}',[biliardController::class,'destroy']);

