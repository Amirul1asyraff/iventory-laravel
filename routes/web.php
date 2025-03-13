<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/color', [ColorController::class, 'index'])->name('color.index');
Route::get('/color/create', [ColorController::class, 'create'])->name('color.create');
Route::post('/color', [ColorController::class, 'store'])->name('color.store');
route::get('Color/{color}', [ColorController::class, 'edit'])->name('color.edit');
route::put('Color/{color}', [ColorController::class, 'update'])->name('color.update');
route::delete('color/{color}', [ColorController::class,'destroy'])->name('color.destroy');
