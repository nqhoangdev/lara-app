<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;


use App\Article;


use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    //

    public function index() {
        $articles = Article::latest('published_at')->get();
        //        return $articles;
        //        return  view('articles.index')->with('articles', $articles);
        return  view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Article::findOrFail($id);


        return view('articles.show', compact('article'));
    }

    public function create() {

        return view('articles.create');
    }

    public function update($id, ArticleRequest $request) {

        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }

    public function store(ArticleRequest $request) {
        $input = Request::all($request->all());

        Article::create($input);

        return redirect('articles');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }
}
