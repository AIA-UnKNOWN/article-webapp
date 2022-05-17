<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    function __invoke(Request $request)
    {
        $articles = Article::get();
        
        return view('pages.index', [
            'articles' => $articles
        ]);
    }
}
