<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        return view('tags', [
            'active' => 'tags', 
            'title' => 'Tags',
            'tags' => $tag->all()
        ]);
    }
}