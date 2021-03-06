<?php

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('api/items', [ItemsController::class, 'index']);
Route::get('api/items/{id}', [ItemsController::class, 'show']);
Route::post('api/items.store', [ItemsController::class, 'store']);
Route::put('api/items.update/{id}', [ItemsController::class, 'update']);
Route::delete('api/items.delete/{id}', [ItemsController::class, 'destroy']);

//  https://jsonplaceholder.typicode.com/posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts{id}', [PostController::class, 'fetchJson'])->name('posts.list.show');

