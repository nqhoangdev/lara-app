<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;


use App\Article;


use App\Http\Requests\CreateArticle;

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
    
    public function store(CreateArticle $request) {
        $input = Request::all($request->all());
        
        Article::create($input);
        
//        return $input;
        
        return redirect('articles');
    }
}
