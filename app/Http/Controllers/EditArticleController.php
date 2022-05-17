<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class EditArticleController extends Controller
{
    function __invoke(Request $request, $id)
    {
        $article = Article::find($id);

        if ($request->isMethod('post')) {
            $article->title = $request->get('title');
            $article->content = $request->get('content');
            $article->save();

            return redirect(route('articles'));
        }

        return view('pages.edit-article', [
            'article' => $article
        ]);
    }
}
