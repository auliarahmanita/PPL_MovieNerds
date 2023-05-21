<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $author)
    {
        return view('articles', [
            'active' => 'articles',
            'title' => "Posts By Author: $author->name",
            'articles' => $author->articles()->load('tag', 'author'),
        ]);
    }

    
}