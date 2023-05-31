<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleLikesDislikes;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('tag')) {
            $tag = Tag::firstWhere('slug', request('tag'));
            $title = ' in ' . $tag->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        $response = Http::get('http://movienerds/api/articles', [
            'search' => request('search'),
            'tag' => request('tag'),
            'author' => request('author')
        ]);

        $articles = Article::where('reviewed', 1)->get();

        $articles = $response->json();

        return view('articles.articles', [
            'title' => 'All Articles' . $title,
            'articles' => $articles,
        ]);
    }

    public function home()
    {
        $title = '';
        if (request('tag')) {
            $tag = Tag::FirstWhere('slug', request('tag'));
            $title = ' in ' . $tag->name;
        }

        if (request('author')) {
            $author = User::FirstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('home', [
            'active' => 'articles',
            "title" => "MovieNerds" . $title,
            "articles" => Article::where('reviewed', 1) // Hanya mengambil artikel dengan status review 1
            ->latest()
            ->filter(request(['search', 'tag', 'author']))
            ->paginate(7)
            ->withQueryString(),     
        ]);
    }
// 
    public function show(Article $article)
    {

        return view('articles.article', [
            'active' => 'articles',
            "title" => "Single Article",
            "article" => $article,
        ]);
    }

    public function like(Article $article)
    {
        $articleLikesDislikes = ArticleLikesDislikes::firstOrNew(['article_id' => $article->id]);

        $articleLikesDislikes->likes++;
        $articleLikesDislikes->save();

        return redirect()->back();
    }

    public function dislike(Article $article)
    {
        $articleLikesDislikes = ArticleLikesDislikes::firstOrNew(['article_id' => $article->id]);

        $articleLikesDislikes->dislikes++;
        $articleLikesDislikes->save();

        return redirect()->back();
    }
}