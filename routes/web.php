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

Route::redirect('/', 'login');

//R del CRUD
Route::get('/',[UserController::class,'index'])->name('home')->middleware('isadmin', 'auth');
Route::get('/home',[UserController::class,'index'])->middleware('isadmin', 'auth');

//D del CRUD
Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('deleteUser')->middleware('isadmin', 'auth');

//C del CRUD
Route::get('/create', [UserController::class, 'create'])->name('createUser')->middleware('isadmin', 'auth');
Route::post('/', [UserController::class, 'store'])->name('storeUser')->middleware('isadmin', 'auth');

//U del CRUD
Route::get('/edit/{id}',[UserController::class, 'edit'])->name('editUser')->middleware('isadmin', 'auth');
Route::patch('/user/{id}',[UserController::class,'update'])->name('updateUser')->middleware('isadmin', 'auth');

//S del Show
Route::get('/show/{id}',[UserController::class,'show'])->name('showUser');



