<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class,'show'])->name('Show');
Route::get('/add', [PostController::class,'add'])->name('Add'); 
Route::post('/do-add', [PostController::class,'doAdd'])->name('DoAdd'); 
Route::get('/edit/{id}', [PostController::class,'edit'])->name('Edit');
Route::post('/do-edit/{id}', [PostController::class,'edit'])->name('DoEdit');
Route::get('/delete/{id}', [PostController::class,'delete'])->name('Delete');


