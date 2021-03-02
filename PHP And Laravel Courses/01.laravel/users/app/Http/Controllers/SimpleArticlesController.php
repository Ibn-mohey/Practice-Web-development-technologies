<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SimpleArticlesController extends Controller
{
    //
    public function index()
    {
        # code... render A list of the resource
        return view(
            'simpleArticle.index',
            [
                'articles' => Article::take(3)->latest()->get(),
            ]
        );
    }

    public function show($articleID)
    {
        # code... show single resource
        $article = Article::find($articleID);

        return view('simpleArticle.show', ['article' => $article]);
    }

    public function create()
    {
        # code... view to create new one
        return view('simpleArticle.create');
    }


    public function store()
    {
        # code... make the create work in the end
        // dump(request()->all());
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/simpleArticles');

    }
    public function edit()
    {
        # code... view to edit the item
    }
    public function update()
    {
        # code...make the update work in the end
    }
    public function destroy()
    {
        # code...delete an item
    }

}
