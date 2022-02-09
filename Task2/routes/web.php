<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/ourteam', [PagesController::class, 'ourteam'])->name('ourteam');
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [PagesController::class, 'contactus'])->name('contactus');
Route::post('/contactus', [PagesController::class, 'contactusSubmitted'])->name('contactus');
Route::get('/studentLogin', [StudentController::class, 'studentLogin'])->name('studentLogin');
Route::post('/studentLogin', [StudentController::class, 'studentLoginsubmitted'])->name('studentLogin');
Route::get('/studentCreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate', [StudentController::class, 'studentCreatesubmitted'])->name('studentCreate');
