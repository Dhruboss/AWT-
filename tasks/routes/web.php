<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/ourteam', [PagesController::class, 'ourteam'])->name('ourteam');
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');