<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('User.pages.home');
});

Auth::routes();
//Route::resource('posts','PostController')
Route::get('/home', [PostController::class, 'index']);
Route::get('create', [PostController::class, 'create']);
Route::post('posts',[PostController::class,'store']);
Route::get('view',[PostController::class,'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
