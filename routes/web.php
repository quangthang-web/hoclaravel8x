<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AcconutController;
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
    return view('login');
});

Route::get('/registration',[RegistrationController::class,'index']);
Route::post('/login',[LoginController::class,'index'])->name('login');
Route::get('/blog',[BlogController::class,'index']);
Route::get('/account',[AcconutController::class,'index']);


Route::get('/category',[CategoryController::class,'index']);
Route::get('/category/{id}',[CategoryController::class,'view']);
Route::get('/create',[CategoryController::class,'create'])->name('create');
Route::post('/insert',[CategoryController::class,'insert'])->name('insert');
Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
Route::post('/update/{id}',[CategoryController::class,'update'])->name('update');
Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('delete');

