<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DeleteArticleController extends Controller
{
    function __invoke(Request $request, $id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect(route('articles'));
    }
}
