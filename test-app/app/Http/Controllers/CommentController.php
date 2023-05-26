<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'parent_comment_id' => 'nullable|exists:comments,id',
            'comment_text' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->article_id = $request->article_id;
        $comment->parent_comment_id = $request->parent_comment_id;
        $comment->user_id = auth()->id(); // Assuming you have user authentication in place
        $comment->comment_text = $request->comment_text;
        $comment->created_at = now();
        $comment->save();

        // You can add any additional logic or redirection here

        return redirect()->back();
    }
}
