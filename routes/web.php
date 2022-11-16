<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\siswaController;

use App\Http\Controllers\KelasController;
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
Route::view('/', 'template.master');

Route::view('/home', 'template.master');

Route::get('/data-table', [AkunController::class, 'index'])->name('indexAkun');
Route::get('/data-table/table', [AkunController::class, 'create'])->name('tableAkun');

// Route untuk uri /account
Route::get('/account', 
  [AccountController::class, 'index']
)->name('indexAccount');
Route::get('/account/create', 
  [AccountController::class, 'create']
)->name('createAccount');
Route::get('/account/show', 
  [AccountController::class, 'show']
)->name('showAccount');

Route::resource('student', siswaController::class);

Route::resource('kelas', KelasController::class);