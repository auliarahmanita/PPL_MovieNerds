<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $posts = auth()->user()->posts()->latest()->get(); // Error of intelephense
        return view('dashboard.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories'    => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug'   => 'required|unique:posts',
            'category_id'   => 'required|numeric',
            'description'   => 'required',
            'image' => 'required|image|file|max:1024',
            'body'   => 'required'
        ]);

        $validatedData['image'] = $request->file('image')->store('post-images');
        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        return redirect()->to('/dashboard/posts')->with('success', 'New post has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post'          => $post,
            'categories'    => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id'   => 'required|numeric',
            'description'   => 'required',
            'image' => 'image|file|max:1024',
            'body'   => 'required'
        ];


        if ($request->slug !== $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->post('old-image')) Storage::delete($request->post('old-image'));
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $post->where('id', $post->id)->update($validatedData);
        return redirect()->to('/dashboard/posts')->with('success', 'Post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image) Storage::delete($post->image);
        $post->delete();
        return redirect()->to('/dashboard/posts')->with('success', 'Post has been deleted.');
    }

    public function slug()
    {
        $slug = Str::of(request('title'))->slug()->value;
        while (true) {
            $post = Post::query()->where('slug', '=', $slug)->get();
            if ($post->isNotEmpty()) {
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
