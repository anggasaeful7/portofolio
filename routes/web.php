<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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
Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
// Versi panjang

Route::get('/post/first-post', function () {
    return view('post/first-post');
});


Route::get('/about', function () {
    return view('about');
});

// Versi Pendek
// Route::view('/', 'home');


Route::get('/profile/{identifier}', [ProfileInformationController::class, '__invoke']);

Route::resource('task', TaskController::class)->middleware('auth');
Route::post('logout', LogoutController::class)->middleware('auth')->name('logout');
// Route::get('/task', [TaskController::class, 'index']);
// Route::post('/task', [TaskController::class, 'store']);
// Route::get('/task/{id}/edit', [TaskController::class, 'edit']);
// Route::put('/task/{id}', [TaskController::class, 'update']);
// Route::delete('/task/{id}', [TaskController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('user.show');

Route::middleware('guest')->group(function () {
    
    Route::get('register', [RegisterationController::class, 'create'])->name('register');
    Route::post('register', [RegisterationController::class, 'store'])->name('register');

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});