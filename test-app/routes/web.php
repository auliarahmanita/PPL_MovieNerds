<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TierController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get('/', function () {
//     $strHome = 'home';
//     return view('home', [
//         'active' => "$strHome",
//         'title' => 'Home',
//     ]);
// });

Route::get('/about', function () {
        return view('about', [
            'active' => 'about',
            'title' => 'About',
            'name' => 'Who?',
            'email' => 'whoami@gmail.com', 
        ]);
    }
);

Route::get('/', [ArticleController::class, 'home']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'show']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/tier', [TierController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);