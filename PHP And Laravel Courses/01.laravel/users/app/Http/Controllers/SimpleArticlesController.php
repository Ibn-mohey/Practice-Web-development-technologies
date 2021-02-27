<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SimpleArticlesController extends Controller
{
    //
    public function show($articleID)
    {
        # code...
        $article = Article::find($articleID);

        return view('simpleArticle.show', ['article' => $article]);
    }
}
