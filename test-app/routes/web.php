<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TierController;
use App\Http\Controllers\TaskArticleController;
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

Route::get('/', function () {
    $strHome = 'landing';
    return view('landing', [
        'active' => "$strHome",
        'title' => 'Landing',
    ]);
});

Route::get('/about', function () {
        return view('about', [
            'active' => 'about',
            'title' => 'About',
            'name' => 'Who?',
            'email' => 'whoami@gmail.com', 
        ]);
    }
);



Route::get('/home', [ArticleController::class, 'home']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'show']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/tier', [TierController::class, 'index']);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

// Route::post('/create', [TaskArticleController::class, 'store']);
Route::get('/create', [TaskArticleController::class, 'create']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [TaskController::class, 'index'])->middleware('auth');

Route::get('/dashboard/articles/slug', [TaskArticlesController::class, 'slug'])->middleware('auth');
Route::resource('/dashboard/articles', TaskArticleController::class)->middleware('auth');

Route::resource('/dashboard/tags', AdminCategoryController::class)->except('show')->middleware('admin');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');