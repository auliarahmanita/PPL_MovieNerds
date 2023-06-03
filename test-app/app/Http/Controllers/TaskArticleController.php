<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TaskArticleController extends Controller
{
    //
    public function index()
    {
        $articles = auth()->user()->articles()->latest()->get(); // Error of intelephense
        return view('dashboard.articles.index', [
            'articles' => $articles
        ]);
    }

    public function create()
    {
        return view('dashboard.articles.create', [
            'tags'    => Tag::all()
        ]); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug'   => 'required|unique:articles',
            'tag_id'   => 'required|numeric',
            'excerpt'   => 'required',
            'photo' => 'nullable|image|file|max:1024',
            'konten'   => 'required'
        ]);

        auth()->user()->increment('exp', 10);
        $this->updateTier(auth()->user());

        $validatedData['photo'] = $request->file('photo')->store('article-images');
        $validatedData['user_id'] = auth()->user()->id;

        Article::create($validatedData);


        return redirect('/profile')->with('success', 'New post has been created.');
    }

    private function updateTier(User $user)
    {
        $exp = $user->exp;

        if ($exp >= 100) {
            $user->update(['tier_id' => 2]);
        }
    }

    public function show(Article $article)
    {
        return view('dashboard.articles.show', [
            'article' => $article
        ]);
    }

    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', [
            'article' => $article,
            'tags'    => Tag::all()
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $rules = [
            'title' => 'required|max:255',
            'tag_id'   => 'required|numeric',
            'excerpt'   => 'required',
            'image' => 'image|file|max:1024',
            'konten'   => 'required'
        ];


        if ($request->slug !== $article->slug) {
            $rules['slug'] = 'required|unique:articles';
        } 

        $validatedData = $request->validate($rules);

        if (request()->file('photo')) {
            if($article->photo && file_exists(public_path('storage/photo/' . $article->photo))){
                Storage::delete('storage/photo/'.$article->photo);
            }
    
            $file = $request->file('photo');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->photo->move(public_path('public/storage/photo'), $fileName);
            $article->photo = $fileName;
        }
    
        // if ($request->file('image')) {
        //     if ($request->article('old-image')) Storage::delete($request->post('old-image'));
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        $validatedData['user_id'] = auth()->user()->id;

        $article->where('id', $article->id)->update($validatedData);
        return redirect()->to('/profile')->with('success', 'Post has been updated.');
    }

    public function destroy(Article $article)
    {
        if ($article->photo) Storage::delete($article->photo);
        $article->delete();
        return redirect()->to('/profile')->with('success', 'Post has been deleted.');
    }

    public function slug()
    {
        $slug = Str::of(request('title'))->slug()->value;
        while (true) {
            $article = Article::query()->where('slug', '=', $slug)->get();
            if ($article->isNotEmpty()) {
                $slug .= '-' . Str::lower(Str::random(5));
                continue;
            } else {
                break;
            }
        }
        return response()->json([
            "slug"  => $slug
        ]);
    }
}
