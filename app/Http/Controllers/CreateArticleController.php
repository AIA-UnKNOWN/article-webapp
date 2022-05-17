<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class CreateArticleController extends Controller
{
    function __invoke(Request $request)
    {
        if ($request->isMethod('post')) {
            $article = new Article;
            $article->title = $request->get('title');
            $article->content = $request->get('content');
            $article->save();

            return redirect(route('articles'));
        }

        return view('pages.create-article');
    }
}
