<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function index()
    {
        $posts = Post::with('replies')->orderBy('created_at', 'desc')->get();

        return view('discussion', compact('posts'));
    }

    public function createPost(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $user = auth()->user();
        $username = $user->username;

        // $username = $request->input('username') ?? 'anonymous';

        $post = new Post();
        $post->username = $username; 
        $post->content = $request->input('content');
        $post->save();

        return redirect()->back()->with('success', 'Post created successfully.');
    }

    public function createReply(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required',
        ]); 

        $username = $request->input('username') ?? 'anonymous';

        $reply = new Reply();
        $reply->post_id = $postId;
        $reply->username = $username;
        $reply->content = $request->input('content');
        $reply->save();

        return redirect()->back()->with('success', 'Reply created successfully.');
    }
}
