<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Omar;
use App\Http\Controllers;
use App\Http\Controllers\Newscontroller;

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
    return view('welcome');
});


//Route::get('/admin', function () {
 ///   return ('Hello admin In Laravel Website');
//}) -> middleware('auth');

//Route::namespace('omar')->group(function(){
    //   Route::get ('users','Omar@showStr');     

//});
//Route::group(['namespace' => 'Omar'], function(){
  //  Route::get('url',[Omar::class,'ShowStr']);
//});

//Route::get('mycon',[Omar::class,'ShowStr']);

//Route::resource('news',[Newscontroller::class]);