<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Render a list of a resorce.

        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles] );
    }

    public function show(Article $article)
    {
        // Show a single resource

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // Shows a view to create a new resource

        return view('articles.create');
    }

    public function store()
    {
        // Persist the new resource
        
        request()->validate([
            'title' => 'required',
            'except' => 'required',
            'body' => 'required',
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->except = request('except');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // Show a view to edit an exisiting recource
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // Persist the edit resource

        request()->validate([
            'title' => 'required',
            'except' => 'required',
            'body' => 'required',
        ]);

        $article->title = request('title');
        $article->except = request('except');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
        // Delete the resource
    }
}
