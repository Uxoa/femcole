<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;

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
/* Route::get('/',[UserController::class,'index'])->name('home')->middleware('auth'); 
 */
Route::get('/home',[UserController::class,'redirectUsers'])->middleware('auth');
Route::get('/homeTeacher',[UserController::class,'index'])->name('home')->middleware('auth');

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


//R del CRUD
Route::get('/homeTeacher',[GradeController::class,'index'])->name('home');

//D del CRUD
Route::delete('/delete/{id}',[GradeController::class,'destroy'])->name('deleteGrade');

//C del CRUD
Route::get('/create', [GradeController::class, 'create'])->name('createGrade');
Route::post('/', [GradeController::class, 'store'])->name('storeGrade');

//U del CRUD
Route::get('/edit/{id}', [GradeController::class, 'edit'])->name('editGrade');
Route::patch('/grade/{id}', [GradeController::class, 'update'])->name('updateGrade');

//Show
Route::get('/show/{id}', [GradeController::class, 'show'])->name('showUser');



