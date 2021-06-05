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


Route::get('/', [App\Http\Controllers\PostsController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\PostsController::class, 'about'])->name('about');
Route::resource('/posts', App\Http\Controllers\PostsController::class);
Route::get('/posts/rm/{id}', [App\Http\Controllers\PostsController::class, 'delete'])->name('posts.delete');


Route::group(['prefix' => '/portal'], function () {

    Route::get('/dashboard', [App\Http\Controllers\PortalController::class, 'dashboard'])->name('dashboard');
    Route::get('/posts', [App\Http\Controllers\PortalController::class, 'posts'])->name('posts');
    Route::get('/posts-requests', [App\Http\Controllers\PortalController::class, 'posts_requests'])->name('posts-requests');

});

Route::get('/update-db', function () {
Artisan::call('migrate:fresh', ["--force" => true ]);
});
