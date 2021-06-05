<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();


Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PostsController::class, 'about'])->name('about');


Route::group(['prefix' => '/portal'], function () {

    Route::get('/dashboard', [App\Http\Controllers\PortalController::class, 'dashboard'])->name('dashboard');
    Route::get('/posts', [App\Http\Controllers\PortalController::class, 'posts'])->name('posts');

});
