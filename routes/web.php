<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Auth::routes();

Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/home',[UserController::class,'index']);

Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('deleteUser');

//C del CRUD
Route::get('/create', [UserController::class, 'create'])->name('createUser');
Route::post('/', [UserController::class, 'store'])->name('storeUser');

//U del CRUD
Route::get('/edit/{id}',[UserController::class, 'edit'])->name('editUser');
Route::patch('/user/{id}',[UserController::class,'update'])->name('updateUser');



