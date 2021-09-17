<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts', [PostController::class, 'index'])->name('listPost');
    Route::get('/createPost', [PostController::class, 'create'])->name('createPost');
    Route::post('/post', [PostController::class, 'store'])->name('post');
    Route::get('/post/{id?}', [PostController::class, 'edit'])->name('editPost');
    Route::get('/updatePost/{id?}', [PostController::class, 'update'])->name('updatePost');
    Route::delete('deletePost/{id}', [PostController::class, 'destroy'])->name('deletePost');
});
