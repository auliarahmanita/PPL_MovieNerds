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
        $article = Article::where('status', 0)->get();

        return view('admin.review-list', compact('articles'));
    }

    public function reviewArticle($id)
    {
        // Ambil posting tertentu untuk direview oleh admin
        $article = Article::findOrFail($id);

        return view('admin.review-article', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Validasi input pengguna
        $validatedData = $request->validate([
            'status' => 'required|in:1,-1', // 1 untuk disetujui, -1 untuk ditolak
        ]);

        $article = Article::findOrFail($article->id);
        $article->status = $request->input('status');
        $article->save();

        return redirect()->route('admin.review.list')->with('success', 'Post review updated successfully');
    }

    public function publicArticles()
    {
        // Ambil posting yang telah direview dan disetujui (status review = 1)
        $article = Article::where('status', 1)->get();

        return view('public.posts', compact('articles'));
    }
}
