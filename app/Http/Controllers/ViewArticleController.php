<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ViewArticleController extends Controller
{
    function __invoke(Request $request, $id)
    {
        $article = Article::find($id);

        return view('pages.view', [
            'article' => $article
        ]);
    }
}
