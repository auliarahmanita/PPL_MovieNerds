<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.articles.index');
    }
}
