<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\User;

class ArticleController extends Controller
{
    public function index()
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

        return view('articles.articles', [
            'active' => 'articles',
            "title" => "All Articles" . $title,
            "articles" => Article::latest()->filter(request(['search', 'tag', 'author']))
                ->paginate(7)->withQueryString(),
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
            "articles" => Article::latest()->filter(request(['search', 'tag', 'author']))
                ->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.article', [
            'active' => 'articles',
            "title" => "Single Article",
            "article" => $article,
        ]);
    }
}