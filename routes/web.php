<?php

use App\Http\Controllers\Newscontroller;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/ahmad/hammad/it', function () {
    return ('Hello Ahmad In Laravel Website');
}) -> name('A');

Route::get('/omar', function () {
    return ('Hello Omar In Laravel Website');
}) -> name('B')->middleware('verified');

Route::get('/ali/{id}', function ($id) {
    return ($id);
});

Route::get('home',[Newscontroller::class,'getHome']);
Route::get('get1',[Newscontroller::class,'getIndex']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
