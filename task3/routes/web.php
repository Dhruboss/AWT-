<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//normal page
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/ourteam', [PagesController::class, 'ourteam'])->name('ourteam');
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [PagesController::class, 'contactus'])->name('contactus');
Route::post('/contactus', [PagesController::class, 'contactusSubmitted'])->name('contactus');

//student
//Route::get('/studentLogin', [StudentController::class, 'studentLogin'])->name('studentLogin');
//Route::post('/studentLogin', [StudentController::class, 'studentLoginsubmitted'])->name('studentLogin');
Route::get('/studentProfile', [StudentController::class, 'studentProfile'])->name('studentProfile');
//Route::get('/profile', [editController::class, 'editProfile'])->name('editprofile')->middleware('ValidUser');
//Route::post('/profile', [editController::class, 'updateData'])->name('editprofile')->middleware('ValidUser');
Route::get('/studentCreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate', [StudentController::class, 'studentCreatesubmitted'])->name('studentCreate');
Route::get('/studentList', [StudentController::class, 'studentList'])->name('studentList')->middleware('ValidStudent') ->middleware('ValidAdmin');
Route::get('/studentEdit/{id}/{name}',[StudentController::class,'studentEdit']);
Route::post('/studentEdit',[StudentController::class,'studentEditSubmitted'])->name('studentEdit');
Route::get('/studentDelete/{id}/{name}',[StudentController::class,'studentDelete']);

//admin
Route::get('/admintList', [AdminController::class, 'adminList'])->name('adminList')->middleware('ValidAdmin');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login');
//Route::post('/login', [LoginController::class, 'AdminloginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//student dash
Route::get('/student/dash', [PagesController::class,'studentDash'])->name('studentDash')->middleware('ValidStudent');
//admin dash
Route::get('/admin/dash', [PagesController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');
