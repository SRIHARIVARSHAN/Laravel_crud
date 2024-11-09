<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;


Route::get('/',action:[studentController::class,"display"]);
Route::post('/add',action:[studentController::class,"add"]);
Route::delete('delete/{id}',action:[studentController::class,"del"]);
Route::get('/edit/{id}',action:[studentController::class,"getedit"]);
Route::post('/update/{id}',action:[studentController::class,"upd"]);
