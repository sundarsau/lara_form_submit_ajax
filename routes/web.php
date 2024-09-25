<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ItemController::class,'index'])->name('item.list');
Route::get('/create-item',[ItemController::class,'create'])->name('item.create');
Route::post('/create-item',[ItemController::class,'store'])->name('item.store');
