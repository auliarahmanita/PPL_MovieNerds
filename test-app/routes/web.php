<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TierController;
use App\Http\Controllers\TaskArticleController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\DiscussionController;
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

Route::get('/landing', function () {
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

// Route::get('/articles', [ArticleController::class, 'index']);
// Route::get('/api/articles', [ArticleController::class, 'index']);
Route::group(['prefix' => 'api'], function () {
    Route::get('/articles', [ArticleController::class, 'index']);
});

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{article:slug}', [ArticleController::class, 'show']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/tier', [TierController::class, 'index']);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::post('/store', [TaskArticleController::class, 'store']);
Route::get('/create', [TaskArticleController::class, 'create']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [TaskController::class, 'index'])->middleware('auth');

Route::get('/dashboard/articles/slug', [TaskArticleController::class, 'slug'])->middleware('auth');
Route::resource('/dashboard/articles', TaskArticleController::class)->middleware('auth');

Route::patch('/update/{article:slug}', [TaskArticleController::class, 'update'])->name('article.update');
Route::get('/dashboard/articles/{article:slug}/edit', [TaskArticleController::class, 'edit']); 

Route::delete('/dashboard/articles/{article:id}', [TaskArticleController::class, 'destroy'])->name('article.destroy'); 

// Route::resource('/admin/review_list', AdminArticleController::class, 'review')->middleware('admin');
Route::get('/admin/review-list', [AdminArticleController::class, 'reviewList'])->name('admin.review.list');
Route::get('/admin/review/{id}', [AdminArticleController::class, 'reviewArticle'])->name('admin.review.article');
Route::patch('/admin/review/{article:id}/update', [AdminArticleController::class, 'update'])->name('admin.review.update');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::post('/articles/{article}/like', [ArticleController::class, 'like'])->name('articles.like');
Route::post('/articles/{article}/dislike', [ArticleController::class, 'dislike'])->name('articles.dislike');

// Discussion
Route::get('/discussion', [DiscussionController::class, 'index'])->name('discussion');
Route::post('/create-post', [DiscussionController::class, 'createPost'])->name('create.post');
Route::post('/create-reply/{postId}', [DiscussionController::class, 'createReply'])->name('create.reply');