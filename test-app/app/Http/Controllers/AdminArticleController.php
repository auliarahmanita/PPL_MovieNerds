<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    //
    public function reviewList()
    {
        // Ambil daftar posting yang perlu direview (status review = 0)
        $articles = Article::where('reviewed', 0)->get();

        return view('dashboard.admin.review-list', compact('articles'));
    }

    public function reviewArticle($id)
    {
        // Ambil posting tertentu untuk direview oleh admin
        $article = Article::findOrFail($id);

        return view('dashboard.admin.review-article', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Validasi input pengguna
        $validatedData = $request->validate([
            'reviewed' => 'required|in:1,-1', // 1 untuk disetujui, -1 untuk ditolak
        ]);

        $article = Article::findOrFail($article->id);
        $article->reviewed = $request->input('reviewed');
        $article->save();

        return redirect()->route('admin.review.list')->with('success', 'Article review updated successfully');
    }

    public function publicArticles()
    {
        // Ambil posting yang telah direview dan disetujui (status review = 1)
        $articles = Article::where('reviewed', 1)->get();

        return view('dashboard.admin.publics', compact('articles'));
    }
}
