<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleLikesDislikes;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

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

        // $articles = Article::latest()->filter(request(['search', 'tag', 'author']))
        //             ->paginate(7)->withQueryString();

        $articles = Article::latest()
                ->filter(request(['search', 'tag', 'author']))
                ->simplePaginate(7);

        return view('articles.articles', [
            'active' => 'articles',
            'title' => 'All Articles' . $title,
            'articles' => $articles
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

        $reviewedArticles = Article::where('reviewed', 1)
            ->latest()
            ->filter(request(['search', 'tag', 'author']))
            ->paginate(7)
            ->withQueryString();

        $popularArticles = Article::select('articles.*', DB::raw('COALESCE(SUM(article_likes_dislikes.likes), 0) as likes_count'))
            ->leftJoin('article_likes_dislikes', 'article_likes_dislikes.article_id', '=', 'articles.id')
            ->groupBy('articles.id','articles.tag_id', 'articles.user_id', 'articles.title', 'articles.slug', 'articles.excerpt', 'articles.konten', 'articles.diposting_pada', 'articles.created_at', 'articles.updated_at', 'articles.reviewed', 'articles.photo')
            ->orderByDesc('likes_count')
            ->take(8)
            ->paginate(7)
            ->withQueryString();
        
        // $articles = $reviewedArticles->union($popularArticles);

        return view('home', [
            'active' => 'articles',
            "title" => "MovieNerds" . $title,
            "reviewedArticles" => $reviewedArticles,
            "popularArticles" => $popularArticles,
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