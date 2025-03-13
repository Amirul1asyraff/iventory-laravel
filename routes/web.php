<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TypeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//color management routes
Route::get('/color', [ColorController::class, 'index'])->name('color.index');
Route::get('/color/create', [ColorController::class, 'create'])->name('color.create');
Route::post('/color', [ColorController::class, 'store'])->name('color.store');
route::get('Color/{color}', [ColorController::class, 'edit'])->name('color.edit');
route::put('Color/{color}', [ColorController::class, 'update'])->name('color.update');
route::delete('color/{color}', [ColorController::class,'destroy'])->name('color.destroy');

//type maanage routes
Route::get('/type', [TypeController::class,'index'])->name('type.index');
Route::get('/type/create', [TypeController::class,'create'])->name('type.create');
Route::post('/type', [TypeController::class,'store'])->name('type.store');
Route::get('/type/{type}', [TypeController::class,'edit'])->name('type.edit');
Route::put('/type/{type}', [TypeController::class,'update'])->name('type.update');
Route::delete('/type/{type}', [TypeController::class,'destroy'])->name('type.destroy');
