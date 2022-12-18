<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $datas=DB::table('post_crud')->get();
    // dd($datas[0]->name);
    return view('show',compact('datas'));
    
})->name('Home');

Route::get('/add', function () {
    return view('add');
})->name('Add');

Route::get('/edit', function () {
    $post_crudData=DB::table('post_crud')->get();
    dd($post_crudData);
})->name('Edit');