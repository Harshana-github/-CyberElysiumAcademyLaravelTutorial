<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function () {

    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //Todo
    Route::name('todo.')->prefix('/todo')->group(function () {
        Route::get('/', [TodoController::class, 'index'])->name('index');
        Route::post('/store', [TodoController::class, 'store'])->name('store');
        Route::get('/{task_id}/delete', [TodoController::class, 'delete'])->name('delete');
        Route::get('/{task_id}/done', [TodoController::class, 'done'])->name('done');
    });

    //Image-uploading
    Route::name('images.')->prefix('/images')->group(function () {
        Route::get('/', [ImageController::class, 'index'])->name('index');
        Route::get('/store', [ImageController::class, 'store'])->name('images');
    });
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup-post', [AuthController::class, 'signup_post'])->name('signup.post');
Route::post('/login-post', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
