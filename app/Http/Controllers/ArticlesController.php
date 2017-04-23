<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->published()->get();
        return view('articles.index',compact('articles'));
}

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        ##dd($request->all());
        Article::create($request->all());
        return redirect('/articles');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }
}
