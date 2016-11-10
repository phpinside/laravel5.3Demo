<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

    public function show($id)
    {
        return view('article/show')->withArticle(Article::with('comments')->find($id));
    }

}
